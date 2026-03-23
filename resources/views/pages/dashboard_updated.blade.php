@extends('layouts.app')

@section('title', 'Dashboard - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron bg-primary text-white rounded-3 p-5 mb-4">
            <h1 class="display-4">Welcome back, {{ Auth::user()->name }}!</h1>
            <p class="lead">Continue your learning journey with CodeCoach ITS</p>
            <hr class="my-4 bg-light">
            <p>Track your progress, access your courses, and continue learning.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-4">Your Courses</h2>
    </div>
</div>

@if(isset($enrollments) && $enrollments->count() > 0)
    <div class="row">
        @foreach($enrollments as $enrollment)
        <div class="col-md-4 mb-4">
            <div class="card course-card h-100">
                <img src="{{ $enrollment->course->image_url ?? 'https://placehold.co/400x200/0056D2/FFFFFF?text=' . urlencode($enrollment->course->title) }}" class="card-img-top" alt="{{ $enrollment->course->title }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $enrollment->course->title }}</h5>
                    <p class="card-text">{{ Str::limit($enrollment->course->description, 100) }}</p>
                    <div class="mt-auto">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: {{ $enrollment->progress_percentage }}%;" aria-valuenow="{{ $enrollment->progress_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $enrollment->progress_percentage }}% Complete</div>
                        </div>
                        <a href="{{ route('courses.show', $enrollment->course_id) }}" class="btn btn-primary w-100">Continue Learning</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-book-open fa-3x text-muted mb-3"></i>
                    <h5>You haven't enrolled in any courses yet</h5>
                    <p class="text-muted">Browse our catalog to find courses that match your interests</p>
                    <a href="{{ route('catalog') }}" class="btn btn-primary">Browse Courses</a>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Learning Statistics</h3>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3">
                        <i class="fas fa-book fa-3x text-primary mb-3"></i>
                        <h5>{{ $enrollments->count() ?? 0 }}</h5>
                        <p>Courses Enrolled</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                        <h5>0</h5>
                        <p>Courses Completed</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                        <h5>0h</h5>
                        <p>Hours Learned</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-trophy fa-3x text-primary mb-3"></i>
                        <h5>0</h5>
                        <p>Achievements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection