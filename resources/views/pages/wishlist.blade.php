@extends('layouts.app')

@section('title', 'My Wishlist - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>My Wishlist</h1>
        <p class="lead">Courses you've saved for later</p>
    </div>
</div>

<div class="row">
    @if(false) {{-- This would be replaced with actual wishlist items --}}
        <!-- Course 1 -->
        <div class="col-md-4 mb-4">
            <div class="card course-card h-100">
                <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Machine+Learning" class="card-img-top" alt="Machine Learning">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Machine Learning Fundamentals</h5>
                    <p class="card-text">Learn the core concepts of machine learning with Python and scikit-learn.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">4.9 ★★★★★</small>
                            <small class="text-muted">Intermediate</small>
                        </div>
                        <div class="mt-2">
                            <a href="{{ url('/courses/9') }}" class="btn btn-primary w-100">View Details</a>
                        </div>
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
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">4.8 ★★★★★</small>
                            <small class="text-muted">Intermediate</small>
                        </div>
                        <div class="mt-2">
                            <a href="{{ url('/courses/10') }}" class="btn btn-primary w-100">View Details</a>
                        </div>
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
                        <div class="d-flex justify-content-between">
                            <small class="text-muted">4.7 ★★★★★</small>
                            <small class="text-muted">Advanced</small>
                        </div>
                        <div class="mt-2">
                            <a href="{{ url('/courses/11') }}" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12 text-center">
            <i class="fas fa-bookmark fa-5x text-muted mb-4"></i>
            <h3>You haven't saved any courses yet</h3>
            <p class="lead">Save courses to your wishlist to easily find them later</p>
            <a href="{{ url('/catalog') }}" class="btn btn-primary">Browse Courses</a>
        </div>
    @endif
</div>
@endsection