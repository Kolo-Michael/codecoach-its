<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Progress;
use App\Models\Rating;

class CourseController extends Controller
{
    /**
     * Display a listing of courses
     */
    public function index()
    {
        $courses = Course::with('ratings')->get();
        return view('pages.courses', compact('courses'));
    }

    /**
     * Display the specified course
     */
    public function show($id)
    {
        $course = Course::with('lessons')->findOrFail($id);
        $user = auth()->user();
        
        // Get user's enrollment status
        $enrollment = Enrollment::where('user_id', $user->id)
                               ->where('course_id', $id)
                               ->first();
        
        // Get user's progress
        $progress = Progress::where('user_id', $user->id)
                           ->where('course_id', $id)
                           ->first();
        
        // Get user's rating
        $userRating = Rating::where('user_id', $user->id)
                           ->where('course_id', $id)
                           ->first();
        
        return view('pages.course', compact('course', 'enrollment', 'progress', 'userRating'));
    }

    /**
     * Enroll user in a course
     */
    public function enroll(Request $request, $id)
    {
        $user = auth()->user();
        
        // Check if already enrolled
        $existingEnrollment = Enrollment::where('user_id', $user->id)
                                       ->where('course_id', $id)
                                       ->first();
        
        if (!$existingEnrollment) {
            Enrollment::create([
                'user_id' => $user->id,
                'course_id' => $id
            ]);
        }
        
        return redirect()->route('courses.show', $id);
    }

    /**
     * Submit a rating for a course
     */
    public function rate(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000'
        ]);
        
        $user = auth()->user();
        
        Rating::updateOrCreate(
            ['user_id' => $user->id, 'course_id' => $id],
            [
                'rating' => $request->rating,
                'review' => $request->review
            ]
        );
        
        return redirect()->back()->with('success', 'Thank you for your rating!');
    }

    /**
     * Mark lesson as completed
     */
    public function completeLesson(Request $request, $courseId, $lessonId)
    {
        $user = auth()->user();
        
        Progress::updateOrCreate(
            [
                'user_id' => $user->id,
                'course_id' => $courseId,
                'lesson_id' => $lessonId
            ],
            [
                'completed' => true,
                'completed_at' => now()
            ]
        );
        
        return redirect()->back()->with('success', 'Lesson marked as completed!');
    }

    /**
     * Get user's dashboard
     */
    public function dashboard()
    {
        $user = auth()->user();
        
        // Get enrolled courses with progress
        $enrollments = Enrollment::where('user_id', $user->id)
                                 ->with('course')
                                 ->get();
        
        // Calculate progress for each course
        foreach ($enrollments as $enrollment) {
            $totalLessons = $enrollment->course->lessons()->count();
            $completedLessons = Progress::where('user_id', $user->id)
                                       ->where('course_id', $enrollment->course_id)
                                       ->where('completed', true)
                                       ->count();
            
            $enrollment->progress_percentage = $totalLessons > 0 ? 
                                              round(($completedLessons / $totalLessons) * 100) : 0;
        }
        
        return view('pages.dashboard', compact('enrollments'));
    }

    /**
     * Get user's profile
     */
    public function profile()
    {
        $user = auth()->user();
        
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
}