<?php

use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/courses', function () {
    return view('pages.courses');
});

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/learning', function () {
    return view('pages.learning');
});

Route::get('/certificates', function () {
    return view('pages.certificates');
});

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/community', function () {
    return view('pages.community');
});

Route::get('/courses/{id}', function ($id) {
    return view('pages.course');
})->where('id', '[0-9]+');

Route::get('/courses/{courseId}/rate', function ($courseId) {
    return view('pages.rate');
})->where('courseId', '[0-9]+');

Route::get('/courses/{courseId}/lessons/{lessonId}', function ($courseId, $lessonId) {
    return view('pages.lesson');
})->where(['courseId' => '[0-9]+', 'lessonId' => '[0-9]+']);

// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard route (protected)
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware('auth')->name('dashboard');

// Profile route (protected)
Route::get('/profile', function () {
    return view('pages.profile');
})->middleware('auth')->name('profile');

// Logout route
Route::post('/logout', function () {
    // We'll implement proper logout logic when we have a working PHP version
    return redirect('/');
})->name('logout');