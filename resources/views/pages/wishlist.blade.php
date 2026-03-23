@extends('layouts.app')

@section('title', 'My Wishlist - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/profile') }}">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>My Wishlist</h2>
        <p class="text-muted">Courses you've saved for later</p>
        
        <div class="row">
            <!-- Wishlist Item 1 -->
            <div class="col-md-12 mb-4">
                <div class="card course-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://placehold.co/300x150/0056D2/FFFFFF?text=Data+Structures" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Data Structures">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title">Data Structures</h5>
                                <p class="card-text">Master essential data structures like lists, dictionaries, stacks, and queues in Python.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-muted">4.9 ★★★★★ (1,450 ratings)</small>
                                        <br>
                                        <small class="text-muted">Intermediate • 6 weeks</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-secondary me-2">
                                            <i class="fas fa-bookmark"></i> Saved
                                        </button>
                                        <a href="{{ url('/courses/2') }}" class="btn btn-primary">View Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Wishlist Item 2 -->
            <div class="col-md-12 mb-4">
                <div class="card course-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://placehold.co/300x150/0056D2/FFFFFF?text=Algorithms" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Algorithms">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title">Algorithms</h5>
                                <p class="card-text">Learn to design and analyze algorithms for problem-solving in Python.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-muted">4.7 ★★★★★ (980 ratings)</small>
                                        <br>
                                        <small class="text-muted">Advanced • 8 weeks</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-secondary me-2">
                                            <i class="fas fa-bookmark"></i> Saved
                                        </button>
                                        <a href="{{ url('/courses/3') }}" class="btn btn-primary">View Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ url('/courses') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add More Courses
            </a>
        </div>
    </div>
</div>
@endsection