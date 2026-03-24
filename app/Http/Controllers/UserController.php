<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Otp;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Rating;

class UserController extends Controller
{
    /**
     * Show the forgot password form
     */
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Send reset password link
     */
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with that email address.']);
        }

        // Generate OTP
        $otpCode = rand(100000, 999999);
        $expiresAt = now()->addMinutes(10);

        Otp::create([
            'user_id' => $user->id,
            'email' => $user->email,
            'otp_code' => $otpCode,
            'expires_at' => $expiresAt
        ]);

        // In a real application, you would send the OTP via email
        // Mail::to($user->email)->send(new OtpMail($otpCode));

        return redirect()->route('otp.show')->with('email', $user->email);
    }

    /**
     * Show OTP verification form
     */
    public function showOtpForm(Request $request)
    {
        $email = $request->session()->get('email');
        return view('auth.verify-otp', compact('email'));
    }

    /**
     * Verify OTP
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|array|size:6',
            'otp.*' => 'required|numeric'
        ]);

        $otpCode = implode('', $request->otp);
        $email = $request->session()->get('email');

        $otpRecord = Otp::where('email', $email)
                        ->where('otp_code', $otpCode)
                        ->first();

        if (!$otpRecord || !$otpRecord->isValid()) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP code.']);
        }

        // Mark OTP as used
        $otpRecord->update(['is_used' => true]);

        // Store user ID in session for password reset
        $request->session()->put('reset_user_id', $otpRecord->user_id);

        return redirect()->route('password.reset.form');
    }

    /**
     * Show password reset form
     */
    public function showResetForm()
    {
        return view('auth.reset-password');
    }

    /**
     * Reset password
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);

        $userId = $request->session()->get('reset_user_id');

        if (!$userId) {
            return redirect()->route('password.request')->withErrors(['email' => 'Invalid request.']);
        }

        $user = User::findOrFail($userId);
        $user->password = Hash::make($request->password);
        $user->save();

        // Clear session data
        $request->session()->forget(['reset_user_id', 'email']);

        return redirect()->route('login')->with('success', 'Password reset successful. Please login with your new password.');
    }

    /**
     * Resend OTP
     */
    public function resendOtp(Request $request)
    {
        $email = $request->session()->get('email');

        if (!$email) {
            return redirect()->route('password.request');
        }

        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('password.request');
        }

        // Generate new OTP
        $otpCode = rand(100000, 999999);
        $expiresAt = now()->addMinutes(10);

        Otp::create([
            'user_id' => $user->id,
            'email' => $user->email,
            'otp_code' => $otpCode,
            'expires_at' => $expiresAt
        ]);

        // In a real application, you would send the OTP via email
        // Mail::to($user->email)->send(new OtpMail($otpCode));

        return back()->with('success', 'New OTP sent to your email.');
    }

    /**
     * Show user dashboard
     */
    public function dashboard()
    {
        $user = Auth::user();
        
        // Get enrolled courses
        $enrollments = Enrollment::where('user_id', $user->id)
                                 ->with('course')
                                 ->get();
        
        // Calculate progress for each course
        foreach ($enrollments as $enrollment) {
            $totalLessons = $enrollment->course->lessons()->count();
            $completedLessons = \App\Models\Progress::where('user_id', $user->id)
                                       ->where('course_id', $enrollment->course_id)
                                       ->where('completed', true)
                                       ->count();
            
            $enrollment->progress_percentage = $totalLessons > 0 ? 
                                              round(($completedLessons / $totalLessons) * 100) : 0;
        }
        
        // Get user statistics
        $stats = [
            'enrolled_courses' => $enrollments->count(),
            'completed_courses' => $enrollments->where('progress_percentage', 100)->count(),
            'hours_learned' => 12, // This would be calculated based on actual data
            'achievements' => 5 // This would be calculated based on actual data
        ];
        
        return view('pages.dashboard', compact('enrollments', 'stats'));
    }

    /**
     * Show user profile
     */
    public function profile()
    {
        $user = Auth::user();
        
        // Get user's enrollments
        $enrollments = Enrollment::where('user_id', $user->id)
                                 ->with('course')
                                 ->get();
        
        // Get user's ratings
        $ratings = Rating::where('user_id', $user->id)
                         ->with('course')
                         ->get();
        
        return view('pages.profile', compact('user', 'enrollments', 'ratings'));
    }

    /**
     * Show user's learning page
     */
    public function learning()
    {
        $user = Auth::user();
        
        // Get enrolled courses with progress
        $enrollments = Enrollment::where('user_id', $user->id)
                                 ->with('course')
                                 ->get();
        
        // Calculate progress for each course
        foreach ($enrollments as $enrollment) {
            $totalLessons = $enrollment->course->lessons()->count();
            $completedLessons = \App\Models\Progress::where('user_id', $user->id)
                                       ->where('course_id', $enrollment->course_id)
                                       ->where('completed', true)
                                       ->count();
            
            $enrollment->progress_percentage = $totalLessons > 0 ? 
                                              round(($completedLessons / $totalLessons) * 100) : 0;
        }
        
        // Get completed courses
        $completedCourses = $enrollments->filter(function ($enrollment) {
            return $enrollment->progress_percentage == 100;
        });
        
        // Get in-progress courses
        $inProgressCourses = $enrollments->filter(function ($enrollment) {
            return $enrollment->progress_percentage > 0 && $enrollment->progress_percentage < 100;
        });
        
        return view('pages.learning', compact('inProgressCourses', 'completedCourses'));
    }

    /**
     * Show certificates page
     */
    public function certificates()
    {
        $user = Auth::user();
        
        // Get completed courses
        $enrollments = Enrollment::where('user_id', $user->id)
                                 ->with('course')
                                 ->get()
                                 ->filter(function ($enrollment) {
                                     $totalLessons = $enrollment->course->lessons()->count();
                                     $completedLessons = \App\Models\Progress::where('user_id', $user()->id)
                                                                ->where('course_id', $enrollment->course_id)
                                                                ->where('completed', true)
                                                                ->count();
                                     
                                     $progressPercentage = $totalLessons > 0 ? 
                                                          round(($completedLessons / $totalLessons) * 100) : 0;
                                     
                                     return $progressPercentage == 100;
                                 });
        
        return view('pages.certificates', compact('enrollments'));
    }
}