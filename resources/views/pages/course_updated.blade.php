@extends('layouts.app')

@section('title', '{{ $course->title ?? "Course Details" }} - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $course->title ?? "Course Details" }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <h1>{{ $course->title ?? "Course Title" }}</h1>
                <p class="lead">{{ $course->description ?? "Course description goes here" }}</p>
                
                <div class="d-flex align-items-center mb-3">
                    <span class="badge bg-warning text-dark me-2">{{ $course->difficulty ?? "Beginner" }}</span>
                    <span class="text-muted">•</span>
                    <span class="ms-2 text-muted">{{ $course->duration_weeks ?? "4" }} weeks</span>
                    <span class="text-muted">•</span>
                    <span class="ms-2 text-muted">
                        @if(isset($course))
                            {{ number_format($course->averageRating() ?? 0, 1) }} 
                            {{ str_repeat('★', floor($course->averageRating() ?? 0)) }}
                            {{ str_repeat('☆', 5 - floor($course->averageRating() ?? 0)) }}
                            ({{ $course->ratingCount() ?? 0 }} ratings)
                        @else
                            4.8 ★★★★★ (1,230 ratings)
                        @endif
                    </span>
                </div>
                
                <h4>About this Course</h4>
                <p>{{ $course->description ?? "This course introduces you to the fundamentals of programming. Whether you're completely new to programming or have experience with other languages, this course will give you a solid foundation." }}</p>
                
                <h4>What You Will Learn</h4>
                <ul>
                    <li>Variables and data types</li>
                    <li>Control structures (if statements, loops)</li>
                    <li>Functions and modules</li>
                    <li>File handling</li>
                    <li>Error handling</li>
                    <li>Basic data structures (lists, tuples, dictionaries)</li>
                </ul>
                
                <div class="alert alert-info">
                    <h5><i class="fas fa-lightbulb"></i> Prerequisites</h5>
                    <p>No prior programming experience required. Basic computer literacy is recommended.</p>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h3>Syllabus</h3>
            </div>
            <div class="card-body">
                <div class="accordion" id="syllabusAccordion">
                    @if(isset($course) && $course->lessons->count() > 0)
                        @foreach($course->lessons as $index => $lesson)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week{{ $index + 1 }}Heading">
                                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#week{{ $index + 1 }}Collapse">
                                    Week {{ $index + 1 }}: {{ $lesson->title }}
                                </button>
                            </h2>
                            <div id="week{{ $index + 1 }}Collapse" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <span>{{ $lesson->title }}</span>
                                                <span><i class="far fa-play-circle"></i> {{ $lesson->duration_minutes ?? 20 }} min</span>
                                            </div>
                                        </li>
                                        @if($lesson->description)
                                        <li class="list-group-item">
                                            <p class="mb-0">{{ $lesson->description }}</p>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week1Heading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week1Collapse">
                                    Week 1: Introduction to Programming
                                </button>
                            </h2>
                            <div id="week1Collapse" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Introduction to Programming</span>
                                                <span><i class="far fa-play-circle"></i> 15 min</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Setting up Environment</span>
                                                <span><i class="far fa-play-circle"></i> 20 min</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Your First Program</span>
                                                <span><i class="far fa-play-circle"></i> 10 min</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <span>Quiz: Getting Started</span>
                                                <span><i class="far fa-edit"></i> 15 min</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-body">
                <img src="{{ $course->image_url ?? 'https://placehold.co/400x200/0056D2/FFFFFF?text=Course+Image' }}" class="card-img-top mb-3" alt="{{ $course->title ?? 'Course Image' }}">
                
                <div class="d-grid gap-2 mb-3">
                    @auth
                        @if(isset($enrollment))
                            <button class="btn btn-success btn-lg" type="button" disabled>
                                <i class="fas fa-check"></i> Enrolled
                            </button>
                        @else
                            <form action="{{ route('courses.enroll', $course->id ?? 1) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary btn-lg" type="submit">
                                    <i class="fas fa-play-circle"></i> Enroll Now
                                </button>
                            </form>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-play-circle"></i> Enroll Now
                        </a>
                    @endauth
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-bookmark"></i> Save for Later
                    </button>
                </div>
                
                <h5>Instructor</h5>
                <div class="d-flex align-items-center mb-3">
                    <img src="https://placehold.co/50x50/CCCCCC/FFFFFF?text=AI" class="rounded-circle me-3" alt="Instructor">
                    <div>
                        <strong>Dr. Sarah Johnson</strong>
                        <br>
                        <small class="text-muted">Senior Software Engineer</small>
                    </div>
                </div>
                
                <h5>Course Features</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i> 24 hours of content</li>
                    <li><i class="fas fa-check text-success me-2"></i> 12 quizzes</li>
                    <li><i class="fas fa-check text-success me-2"></i> 6 coding exercises</li>
                    <li><i class="fas fa-check text-success me-2"></i> 1 final project</li>
                    <li><i class="fas fa-check text-success me-2"></i> Peer discussion forums</li>
                    <li><i class="fas fa-check text-success me-2"></i> Certificate of completion</li>
                </ul>
                
                @auth
                    @if(isset($userRating))
                        <h5>Your Rating</h5>
                        <div class="mb-2">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $userRating->rating)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                        </div>
                        @if($userRating->review)
                            <p class="mb-0">{{ $userRating->review }}</p>
                        @endif
                    @else
                        <h5>Rate This Course</h5>
                        <form action="{{ route('courses.rate', $course->id ?? 1) }}" method="POST">
                            @csrf
                            <div class="rating-stars mb-2">
                                <i class="far fa-star fa-lg text-warning rating-star" data-rating="1"></i>
                                <i class="far fa-star fa-lg text-warning rating-star" data-rating="2"></i>
                                <i class="far fa-star fa-lg text-warning rating-star" data-rating="3"></i>
                                <i class="far fa-star fa-lg text-warning rating-star" data-rating="4"></i>
                                <i class="far fa-star fa-lg text-warning rating-star" data-rating="5"></i>
                            </div>
                            <input type="hidden" name="rating" id="ratingInput" value="0">
                            <textarea name="review" class="form-control mb-2" rows="2" placeholder="Share your experience (optional)"></textarea>
                            <button type="submit" class="btn btn-primary btn-sm" id="submitRating" disabled>Submit Rating</button>
                        </form>
                    @endif
                @endauth
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
    const ratingInput = document.getElementById('ratingInput');
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
            
            // Update hidden input and enable submit button
            ratingInput.value = rating;
            submitButton.disabled = false;
        });
    });
});
</script>
@endsection