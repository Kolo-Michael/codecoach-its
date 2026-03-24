@extends('layouts.app')

@section('title', 'Course Details - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Python Fundamentals</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h1>Python Fundamentals</h1>
                        <p class="lead">Learn the basics of Python programming including variables, data types, and control structures.</p>
                    </div>
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="courseActions" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i>Save for Later</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-share-alt me-2"></i>Share</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-flag me-2"></i>Report</a></li>
                            </ul>
                        </div>
                    @endauth
                </div>
                
                <div class="d-flex align-items-center mb-3">
                    <span class="badge bg-warning text-dark me-2">Beginner</span>
                    <span class="text-muted">•</span>
                    <span class="ms-2 text-muted">4 weeks</span>
                    <span class="text-muted">•</span>
                    <span class="ms-2 text-muted">
                        @if(isset($course) && $course->ratings->count() > 0)
                            {{ number_format($course->averageRating(), 1) }} ★★★★★ 
                            ({{ $course->ratings->count() }} ratings)
                        @else
                            No ratings yet
                        @endif
                    </span>
                </div>
                
                <div class="mb-4">
                    <img src="https://placehold.co/800x400/0056D2/FFFFFF?text=Python+Fundamentals" class="img-fluid rounded" alt="Python Fundamentals">
                </div>
                
                <h4>About this Course</h4>
                <p>This course introduces you to the fundamentals of Python programming. Whether you're completely new to programming or have experience with other languages, this course will give you a solid foundation in Python.</p>
                
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
        
        @auth
            @if(isset($enrollment) && $enrollment)
                <div class="card mb-4">
                    <div class="card-header">
                        <h3>Your Progress</h3>
                    </div>
                    <div class="card-body">
                        @if(isset($progress))
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: {{ $progress->percentage }}%;" aria-valuenow="{{ $progress->percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $progress->percentage }}%</div>
                            </div>
                            <p>You've completed {{ $progress->percentage }}% of this course.</p>
                            
                            @if($progress->percentage == 100)
                                <div class="alert alert-success">
                                    <h5><i class="fas fa-certificate"></i> Congratulations!</h5>
                                    <p>You've completed this course. <a href="{{ url('/completion/1') }}">View your certificate</a>.</p>
                                </div>
                            @endif
                        @else
                            <p>You're enrolled in this course but haven't started yet.</p>
                        @endif
                        
                        <a href="{{ url('/courses/1/lessons/1') }}" class="btn btn-primary">
                            <i class="fas fa-play-circle me-2"></i>
                            @if(isset($progress) && $progress->percentage > 0) Continue Learning @else Start Learning @endif
                        </a>
                    </div>
                </div>
            @endif
        @endauth
        
        <div class="card mb-4">
            <div class="card-header">
                <h3>Syllabus</h3>
            </div>
            <div class="card-body">
                <div class="accordion" id="syllabusAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="week1Heading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week1Collapse">
                                Week 1: Introduction to Python
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
                                            <span>Setting up Python Environment</span>
                                            <span><i class="far fa-play-circle"></i> 20 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Your First Python Program</span>
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
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="week2Heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#week2Collapse">
                                Week 2: Variables and Data Types
                            </button>
                        </h2>
                        <div id="week2Collapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Understanding Variables</span>
                                            <span><i class="far fa-play-circle"></i> 18 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Numeric Data Types</span>
                                            <span><i class="far fa-play-circle"></i> 22 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Strings and String Operations</span>
                                            <span><i class="far fa-play-circle"></i> 25 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Boolean Values and Logic</span>
                                            <span><i class="far fa-play-circle"></i> 15 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Coding Exercise: Variable Practice</span>
                                            <span><i class="far fa-keyboard"></i> 30 min</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h3>Student Reviews</h3>
            </div>
            <div class="card-body">
                @if(isset($course) && $course->ratings->count() > 0)
                    <div class="d-flex align-items-center mb-3">
                        <h4 class="me-3 mb-0">{{ number_format($course->averageRating(), 1) }}</h4>
                        <div>
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= round($course->averageRating()))
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                            <span class="ms-2">({{ $course->ratings->count() }} reviews)</span>
                        </div>
                    </div>
                    
                    @foreach($course->ratings->take(3) as $rating)
                        <div class="border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <h6>{{ $rating->user->name }}</h6>
                                <small class="text-muted">{{ $rating->created_at->diffForHumans() }}</small>
                            </div>
                            <div class="mb-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= $rating->rating)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                            @if($rating->review)
                                <p class="mb-0">{{ $rating->review }}</p>
                            @endif
                        </div>
                    @endforeach
                    
                    <a href="#" class="btn btn-outline-primary">See all {{ $course->ratings->count() }} reviews</a>
                @else
                    <p>No reviews yet. Be the first to review this course!</p>
                @endif
                
                @auth
                    @if(isset($userRating))
                        <div class="mt-4">
                            <h5>Your Review</h5>
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
                                <p>{{ $userRating->review }}</p>
                            @endif
                            <a href="{{ url('/courses/' . $course->id . '/rate') }}" class="btn btn-outline-primary btn-sm">Edit Review</a>
                        </div>
                    @elseif(isset($enrollment) && $enrollment && isset($progress) && $progress->percentage == 100)
                        <div class="mt-4">
                            <a href="{{ url('/courses/' . $course->id . '/rate') }}" class="btn btn-primary">Rate This Course</a>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-body">
                <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Python+Basics" class="card-img-top mb-3" alt="Python Basics">
                
                @auth
                    @if(!isset($enrollment) || !$enrollment)
                        <form method="POST" action="{{ route('courses.enroll', $course->id ?? 1) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                <i class="fas fa-user-plus me-2"></i> Enroll Now
                            </button>
                        </form>
                    @else
                        <a href="{{ url('/courses/1/lessons/1') }}" class="btn btn-primary btn-lg w-100 mb-3">
                            <i class="fas fa-play-circle me-2"></i> Continue Learning
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg w-100 mb-3">
                        <i class="fas fa-user-plus me-2"></i> Enroll Now
                    </a>
                @endauth
                
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
                
                <h5>This Course Includes</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-mobile-alt text-primary me-2"></i> Access on mobile and desktop</li>
                    <li><i class="fas fa-file-certificate text-primary me-2"></i> Certificate of completion</li>
                    <li><i class="fas fa-infinity text-primary me-2"></i> Full lifetime access</li>
                    <li><i class="fas fa-sync-alt text-primary me-2"></i> Free updates</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection