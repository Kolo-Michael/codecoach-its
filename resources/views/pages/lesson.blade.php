@extends('layouts.app')

@section('title', 'Lesson - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Courses</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses/1') }}">Python Fundamentals</a></li>
                <li class="breadcrumb-item active" aria-current="page">Variables and Data Types</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Week 2: Variables and Data Types</h2>
                <span class="badge bg-light text-dark">25 min</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Understanding Variables</h3>
                        <p>In this lesson, you'll learn about variables in Python and how to use them effectively.</p>
                        
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe src="https://player.vimeo.com/video/placeholder" title="Lesson Video" allowfullscreen></iframe>
                        </div>
                        
                        <h4>Key Concepts</h4>
                        <ul>
                            <li>What is a variable?</li>
                            <li>Variable naming rules</li>
                            <li>Assigning values to variables</li>
                            <li>Different data types in Python</li>
                        </ul>
                        
                        <div class="alert alert-info">
                            <h5><i class="fas fa-lightbulb"></i> Tip</h5>
                            <p>Choose descriptive variable names that clearly indicate what the variable represents. This makes your code more readable and maintainable.</p>
                        </div>
                        
                        <h4>Examples</h4>
                        <pre class="bg-light p-3">
<span class="text-muted"># Integer variable</span>
age = 25

<span class="text-muted"># String variable</span>
name = "Alice"

<span class="text-muted"># Float variable</span>
temperature = 98.6

<span class="text-muted"># Boolean variable</span>
is_student = True

<span class="text-muted"># Checking variable types</span>
print(type(age))        <span class="text-muted"># &lt;class 'int'&gt;</span>
print(type(name))       <span class="text-muted"># &lt;class 'str'&gt;</span>
print(type(temperature)) <span class="text-muted"># &lt;class 'float'&gt;</span>
print(type(is_student)) <span class="text-muted"># &lt;class 'bool'&gt;</span>
                        </pre>
                        
                        <h4>Practice Exercise</h4>
                        <p>Create variables to store information about a book:</p>
                        <ol>
                            <li>Title (string)</li>
                            <li>Author (string)</li>
                            <li>Publication year (integer)</li>
                            <li>Price (float)</li>
                            <li>Available in ebook format (boolean)</li>
                        </ol>
                        <p>Print each variable and its type.</p>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Lesson Navigation</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <i class="fas fa-play-circle me-2"></i> Understanding Variables
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="far fa-play-circle me-2"></i> Numeric Data Types
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="far fa-play-circle me-2"></i> Strings and String Operations
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="far fa-play-circle me-2"></i> Boolean Values and Logic
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="far fa-keyboard me-2"></i> Coding Exercise: Variable Practice
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mt-4">
                            <div class="card-header">
                                <h5>AI Assistant</h5>
                            </div>
                            <div class="card-body">
                                <p>Need help understanding a concept? Ask our AI tutor!</p>
                                <button class="btn btn-outline-primary w-100">
                                    <i class="fas fa-robot me-2"></i> Ask AI Tutor
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="#" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Previous Lesson
                </a>
                <a href="#" class="btn btn-primary">
                    Next Lesson <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Discussion Forum</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Ask a question or share your thoughts about this lesson..."></textarea>
                    <button class="btn btn-primary mt-2">Post Question</button>
                </div>
                
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex">
                        <img src="https://placehold.co/40x40/CCCCCC/FFFFFF?text=JD" class="rounded-circle me-3" alt="User">
                        <div>
                            <h6 class="mb-1">John Doe</h6>
                            <p class="mb-1">I'm confused about the difference between integers and floats. Can someone explain?</p>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                    </div>
                    <div class="ms-5 mt-2">
                        <div class="d-flex">
                            <img src="https://placehold.co/40x40/CCCCCC/FFFFFF?text=AI" class="rounded-circle me-3" alt="AI">
                            <div>
                                <h6 class="mb-1">AI Assistant</h6>
                                <p class="mb-1">Integers are whole numbers (like 5, -3, 100) while floats are decimal numbers (like 5.0, -3.14, 100.5). In Python, 5 and 5.0 are different types!</p>
                                <small class="text-muted">1 hour ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex">
                        <img src="https://placehold.co/40x40/CCCCCC/FFFFFF?text=SM" class="rounded-circle me-3" alt="User">
                        <div>
                            <h6 class="mb-1">Sarah Miller</h6>
                            <p class="mb-1">The tip about descriptive variable names is really helpful. I always forget to do this!</p>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection