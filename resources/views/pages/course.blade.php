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
                <h1>Python Fundamentals</h1>
                <p class="lead">Learn the basics of Python programming including variables, data types, and control structures.</p>
                
                <div class="d-flex align-items-center mb-3">
                    <span class="badge bg-warning text-dark me-2">Beginner</span>
                    <span class="text-muted">•</span>
                    <span class="ms-2 text-muted">4 weeks</span>
                    <span class="text-muted">•</span>
                    <span class="ms-2 text-muted">4.8 ★★★★★ (1,230 ratings)</span>
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
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="week3Heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#week3Collapse">
                                Week 3: Control Structures
                            </button>
                        </h2>
                        <div id="week3Collapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Conditional Statements</span>
                                            <span><i class="far fa-play-circle"></i> 20 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>For Loops</span>
                                            <span><i class="far fa-play-circle"></i> 25 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>While Loops</span>
                                            <span><i class="far fa-play-circle"></i> 18 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Nested Control Structures</span>
                                            <span><i class="far fa-play-circle"></i> 22 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Quiz: Control Structures</span>
                                            <span><i class="far fa-edit"></i> 20 min</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="week4Heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#week4Collapse">
                                Week 4: Functions and Modules
                            </button>
                        </h2>
                        <div id="week4Collapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Defining Functions</span>
                                            <span><i class="far fa-play-circle"></i> 25 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Function Parameters and Return Values</span>
                                            <span><i class="far fa-play-circle"></i> 30 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Modules and Libraries</span>
                                            <span><i class="far fa-play-circle"></i> 20 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Final Project: Simple Calculator</span>
                                            <span><i class="far fa-keyboard"></i> 60 min</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <span>Course Final Quiz</span>
                                            <span><i class="far fa-edit"></i> 30 min</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-body">
                <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Python+Basics" class="card-img-top mb-3" alt="Python Basics">
                
                <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary btn-lg" type="button">
                        <i class="fas fa-play-circle"></i> Start Learning
                    </button>
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
            </div>
        </div>
    </div>
</div>
@endsection