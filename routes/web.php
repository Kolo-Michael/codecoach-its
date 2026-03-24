<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

// Public routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/catalog', function () {
    return view('pages.catalog');
})->name('catalog');
Route::get('/search', function () {
    return view('pages.search');
})->name('search');
Route::get('/help', function () {
    return view('pages.help');
})->name('help');
Route::get('/community', function () {
    return view('pages.community');
})->name('community');

// Course routes
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{courseId}/rate', function ($courseId) {
    return view('pages.rate', ['courseId' => $courseId]);
})->name('courses.rate')->where('courseId', '[0-9]+');
Route::get('/courses/{courseId}/lessons/{lessonId}', function ($courseId, $lessonId) {
    return view('pages.lesson');
})->name('courses.lesson')->where(['courseId' => '[0-9]+', 'lessonId' => '[0-9]+']);

// Authentication routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout')->name('logout');
});

// Password reset routes
Route::controller(UserController::class)->group(function () {
    Route::get('/forgot-password', 'showForgotPasswordForm')->name('password.request');
    Route::post('/forgot-password', 'sendResetLink')->name('password.email');
    Route::get('/verify-otp', 'showOtpForm')->name('otp.show');
    Route::post('/verify-otp', 'verifyOtp')->name('otp.verify');
    Route::get('/resend-otp', 'resendOtp')->name('otp.resend');
    Route::get('/reset-password', 'showResetForm')->name('password.reset.form');
    Route::post('/reset-password', 'resetPassword')->name('password.update');
});

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/learning', [UserController::class, 'learning'])->name('learning');
    Route::get('/certificates', [UserController::class, 'certificates'])->name('certificates');
    Route::get('/settings', function () {
        return view('pages.settings');
    })->name('settings');
    Route::get('/wishlist', function () {
        return view('pages.wishlist');
    })->name('wishlist');
    Route::get('/completion/{id}', function ($id) {
        return view('pages.completion', ['courseId' => $id]);
    })->name('completion');
    
    // Course enrollment routes
    Route::post('/courses/{id}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');
    Route::post('/courses/{id}/rate', [CourseController::class, 'rate'])->name('courses.rate.submit');
    Route::post('/courses/{courseId}/lessons/{lessonId}/complete', [CourseController::class, 'completeLesson'])->name('lessons.complete');
});