@extends('layouts.app') 

@section('title', 'Home - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron bg-primary text-white rounded-3 p-5 mb-4">
            <h1 class="display-4">Welcome to CodeCoach ITS</h1>
            <p class="lead">Master Python programming with our intelligent tutoring system</p>
            <hr class="my-4 bg-light">
            <p>Learn at your own pace with personalized feedback and assessments</p>
            <a class="btn btn-light btn-lg" href="{{ url('/courses') }}" role="button">Explore Courses</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-4">Featured Courses</h2>
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
                    <small class="text-muted">Beginner • 4 weeks</small>
                    <a href="{{ url('/courses/1') }}" class="btn btn-primary w-100 mt-2">Enroll Now</a>
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
                    <small class="text-muted">Intermediate • 6 weeks</small>
                    <a href="{{ url('/courses/2') }}" class="btn btn-primary w-100 mt-2">Enroll Now</a>
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
                    <small class="text-muted">Advanced • 8 weeks</small>
                    <a href="{{ url('/courses/3') }}" class="btn btn-primary w-100 mt-2">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">How CodeCoach ITS Works</h3>
                <div class="row text-center">
                    <div class="col-md-3">
                        <i class="fas fa-book fa-3x text-primary mb-3"></i>
                        <h5>Learn</h5>
                        <p>Interactive lessons with multimedia content</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                        <h5>Practice</h5>
                        <p>Hands-on coding exercises and projects</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-robot fa-3x text-primary mb-3"></i>
                        <h5>Get Feedback</h5>
                        <p>AI-powered personalized feedback</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                        <h5>Track Progress</h5>
                        <p>Monitor your learning journey</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection