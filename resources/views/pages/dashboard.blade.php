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

<div class="row">
    <!-- Course 1 -->
    <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Python+Basics" class="card-img-top" alt="Python Basics">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Python Fundamentals</h5>
                <p class="card-text">Learn the basics of Python programming including variables, data types, and control structures.</p>
                <div class="mt-auto">
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                    </div>
                    <a href="{{ url('/courses/1') }}" class="btn btn-primary w-100">Continue Learning</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Course 2 -->
    <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Structures" class="card-img-top" alt="Data Structures">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Data Structures</h5>
                <p class="card-text">Master essential data structures like lists, dictionaries, stacks, and queues in Python.</p>
                <div class="mt-auto">
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0% Complete</div>
                    </div>
                    <a href="{{ url('/courses/2') }}" class="btn btn-outline-primary w-100">Start Learning</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Course 3 -->
    <div class="col-md-4 mb-4">
        <div class="card course-card h-100">
            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Algorithms" class="card-img-top" alt="Algorithms">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Algorithms</h5>
                <p class="card-text">Learn to design and analyze algorithms for problem-solving in Python.</p>
                <div class="mt-auto">
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0% Complete</div>
                    </div>
                    <a href="{{ url('/courses/3') }}" class="btn btn-outline-primary w-100">Start Learning</a>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <h5>3</h5>
                        <p>Courses Enrolled</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                        <h5>1</h5>
                        <p>Courses Completed</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                        <h5>12h</h5>
                        <p>Hours Learned</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-trophy fa-3x text-primary mb-3"></i>
                        <h5>5</h5>
                        <p>Achievements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection