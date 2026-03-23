@extends('layouts.app')

@section('title', 'Course Completion - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Courses</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses/1') }}">Python Fundamentals</a></li>
                <li class="breadcrumb-item active" aria-current="page">Completion</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card text-center">
            <div class="card-header bg-success text-white">
                <h2 class="mb-0">Congratulations!</h2>
            </div>
            <div class="card-body">
                <i class="fas fa-trophy fa-5x text-warning mb-4"></i>
                <h3>You've Completed Python Fundamentals</h3>
                <p class="lead">You've successfully finished all lessons and passed the final assessment.</p>
                
                <div class="certificate-preview my-4">
                    <img src="https://placehold.co/400x250/0056D2/FFFFFF?text=Certificate+of+Completion" class="img-fluid" alt="Certificate Preview">
                </div>
                
                <p>Your certificate is ready! You can download it or share it on social media.</p>
                
                <div class="d-grid gap-2 d-md-flex justify-content-center mb-4">
                    <button class="btn btn-primary me-md-2" type="button">
                        <i class="fas fa-download"></i> Download Certificate
                    </button>
                    <button class="btn btn-outline-primary" type="button">
                        <i class="fab fa-twitter"></i> Share on Twitter
                    </button>
                    <button class="btn btn-outline-primary" type="button">
                        <i class="fab fa-linkedin"></i> Share on LinkedIn
                    </button>
                </div>
                
                <h4>Rate This Course</h4>
                <p>Help us improve by sharing your experience</p>
                
                <div class="rating-stars mb-3">
                    <i class="far fa-star fa-2x text-warning rating-star" data-rating="1"></i>
                    <i class="far fa-star fa-2x text-warning rating-star" data-rating="2"></i>
                    <i class="far fa-star fa-2x text-warning rating-star" data-rating="3"></i>
                    <i class="far fa-star fa-2x text-warning rating-star" data-rating="4"></i>
                    <i class="far fa-star fa-2x text-warning rating-star" data-rating="5"></i>
                </div>
                
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Share your experience with this course (optional)"></textarea>
                </div>
                
                <button class="btn btn-success" id="submitRating">
                    Submit Rating
                </button>
            </div>
            <div class="card-footer">
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-tachometer-alt"></i> Back to Dashboard
                </a>
                <a href="{{ url('/courses/1') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-book"></i> Review Course Content
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <h3 class="text-center mb-4">Continue Your Learning Journey</h3>
        <div class="row">
            <!-- Recommended Course 1 -->
            <div class="col-md-4 mb-4">
                <div class="card course-card h-100">
                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Structures" class="card-img-top" alt="Data Structures">
                    <div class="card-body">
                        <h5 class="card-title">Data Structures</h5>
                        <p class="card-text">Master essential data structures like lists, dictionaries, stacks, and queues in Python.</p>
                        <a href="{{ url('/courses/2') }}" class="btn btn-primary w-100">View Course</a>
                    </div>
                </div>
            </div>
            
            <!-- Recommended Course 2 -->
            <div class="col-md-4 mb-4">
                <div class="card course-card h-100">
                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=OOP" class="card-img-top" alt="OOP">
                    <div class="card-body">
                        <h5 class="card-title">Object-Oriented Programming</h5>
                        <p class="card-text">Master OOP concepts in Python including classes, inheritance, and polymorphism.</p>
                        <a href="{{ url('/courses/4') }}" class="btn btn-primary w-100">View Course</a>
                    </div>
                </div>
            </div>
            
            <!-- Recommended Course 3 -->
            <div class="col-md-4 mb-4">
                <div class="card course-card h-100">
                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Web+Development" class="card-img-top" alt="Web Development">
                    <div class="card-body">
                        <h5 class="card-title">Web Development with Flask</h5>
                        <p class="card-text">Build web applications using the Flask framework and deploy them to the cloud.</p>
                        <a href="{{ url('/courses/5') }}" class="btn btn-primary w-100">View Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rating functionality
    const stars = document.querySelectorAll('.rating-star');
    const submitButton = document.getElementById('submitRating');
    
    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.getAttribute('data-rating');
            
            // Reset all stars
            stars.forEach(s => {
                s.classList.remove('fas');
                s.classList.add('far');
            });
            
            // Fill stars up to selected rating
            for (let i = 0; i < rating; i++) {
                stars[i].classList.remove('far');
                stars[i].classList.add('fas');
            }
            
            // Store rating value
            submitButton.setAttribute('data-rating', rating);
        });
    });
    
    submitButton.addEventListener('click', function() {
        const rating = this.getAttribute('data-rating');
        if (rating) {
            alert(`Thank you for rating this course ${rating} stars!`);
            // Here you would send the rating to the server
        } else {
            alert('Please select a star rating');
        }
    });
});
</script>
@endsection