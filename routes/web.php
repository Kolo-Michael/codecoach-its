<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('pages.home');
});

// Courses pages
Route::get('/courses', function () {
    return view('pages.courses');
});

// Single course page
Route::get('/courses/{id}', function ($id) {
    return view('pages.course');
})->where('id', '[0-9]+');

// Lesson page
Route::get('/courses/{courseId}/lessons/{lessonId}', function ($courseId, $lessonId) {
    return view('pages.lesson');
})->where(['courseId' => '[0-9]+', 'lessonId' => '[0-9]+']);
