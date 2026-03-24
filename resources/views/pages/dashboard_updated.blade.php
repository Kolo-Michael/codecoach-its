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
        <h2 class="mb-4">Your Learning Stats</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card border-primary">
            <div class="card-body text-center">
                <i class="fas fa-book fa-3x text-primary mb-3"></i>
                <h5>{{ $stats['enrolled_courses'] ?? 3 }}</h5>
                <p class="mb-0">Courses Enrolled</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card border-success">
            <div class="card-body text-center">
                <i class="fas fa-graduation-cap fa-3x text-success mb-3"></i>
                <h5>{{ $stats['completed_courses'] ?? 1 }}</h5>
                <p class="mb-0">Courses Completed</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card border-info">
            <div class="card-body text-center">
                <i class="fas fa-clock fa-3x text-info mb-3"></i>
                <h5>{{ $stats['hours_learned'] ?? 12 }}h</h5>
                <p class="mb-0">Hours Learned</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card border-warning">
            <div class="card-body text-center">
                <i class="fas fa-trophy fa-3x text-warning mb-3"></i>
                <h5>{{ $stats['achievements'] ?? 5 }}</h5>
                <p class="mb-0">Achievements</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-4">Continue Learning</h2>
    </div>
</div>

@if(isset($enrollments) && $enrollments->count() > 0)
    <div class="row">
        @foreach($enrollments as $enrollment)
            @if($enrollment->progress_percentage < 100)
                <div class="col-md-4 mb-4">
                    <div class="card course-card h-100">
                        <img src="https://placehold.co/400x200/0056D2/FFFFFF?text={{ urlencode($enrollment->course->title) }}" class="card-img-top" alt="{{ $enrollment->course->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $enrollment->course->title }}</h5>
                            <p class="card-text">{{ Str::limit($enrollment->course->description, 100) }}</p>
                            <div class="mt-auto">
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $enrollment->progress_percentage }}%;" aria-valuenow="{{ $enrollment->progress_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $enrollment->progress_percentage }}% Complete</div>
                                </div>
                                <a href="{{ route('courses.lesson', ['courseId' => $enrollment->course->id, 'lessonId' => 1]) }}" class="btn btn-primary w-100">Continue Learning</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@else
    <div class="row">
        <div class="col-md-12 text-center">
            <i class="fas fa-book-open fa-5x text-muted mb-4"></i>
            <h3>You haven't enrolled in any courses yet</h3>
            <p class="lead">Start your learning journey by exploring our course catalog</p>
            <a href="{{ route('catalog') }}" class="btn btn-primary">Browse Courses</a>
        </div>
    </div>
@endif

<div class="row mt-5">
    <div class="col-md-12">
        <h2 class="mb-4">Recently Added Courses</h2>
    </div>
</div>

<div class="row">
    <!-- Course 1 -->
    <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Machine+Learning" class="card-img-top" alt="Machine Learning">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Machine Learning Fundamentals</h5>
                <p class="card-text">Learn the core concepts of machine learning with Python and scikit-learn.</p>
                <div class="mt-auto">
                    <small class="text-muted">4.9 ★★★★★ (1,230 ratings)</small>
                    <a href="{{ url('/courses/9') }}" class="btn btn-primary w-100 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Course 2 -->
    <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Visualization" class="card-img-top" alt="Data Visualization">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Data Visualization with Python</h5>
                <p class="card-text">Create compelling visualizations using matplotlib, seaborn, and plotly.</p>
                <div class="mt-auto">
                    <small class="text-muted">4.8 ★★★★★ (892 ratings)</small>
                    <a href="{{ url('/courses/10') }}" class="btn btn-primary w-100 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Course 3 -->
    <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Cloud+Computing" class="card-img-top" alt="Cloud Computing">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Cloud Computing with AWS</h5>
                <p class="card-text">Deploy and manage applications on Amazon Web Services.</p>
                <div class="mt-auto">
                    <small class="text-muted">4.7 ★★★★★ (756 ratings)</small>
                    <a href="{{ url('/courses/11') }}" class="btn btn-primary w-100 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection