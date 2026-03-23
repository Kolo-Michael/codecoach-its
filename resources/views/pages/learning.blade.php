@extends('layouts.app')

@section('title', 'My Learning - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>My Learning</h1>
        <p class="lead">Continue your educational journey with CodeCoach ITS</p>
    </div>
</div>

<ul class="nav nav-tabs mb-4" id="learningTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="in-progress-tab" data-bs-toggle="tab" data-bs-target="#in-progress" type="button" role="tab">In Progress</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab">Completed</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="saved-tab" data-bs-toggle="tab" data-bs-target="#saved" type="button" role="tab">Saved for Later</button>
    </li>
</ul>

<div class="tab-content" id="learningTabsContent">
    <div class="tab-pane fade show active" id="in-progress" role="tabpanel">
        <div class="row">
            <!-- Course 1 -->
            <div class="col-md-12 mb-4">
                <div class="card horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Python+Basics" class="img-fluid rounded-start h-100" alt="Python Basics">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Python Fundamentals</h5>
                                    <span class="badge bg-warning text-dark">In Progress</span>
                                </div>
                                <p class="card-text">Learn the basics of Python programming including variables, data types, and control structures.</p>
                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">4.8 ★★★★★ (1,230 ratings)</small>
                                    <small class="text-muted">Beginner • 4 weeks</small>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>25% Complete</span>
                                        <span>1 week left</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="{{ url('/courses/1/lessons/2') }}" class="btn btn-primary">Continue</a>
                                    <a href="{{ url('/courses/1') }}" class="btn btn-outline-secondary">Course Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Course 2 -->
            <div class="col-md-12 mb-4">
                <div class="card horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Structures" class="img-fluid rounded-start h-100" alt="Data Structures">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Data Structures</h5>
                                    <span class="badge bg-warning text-dark">In Progress</span>
                                </div>
                                <p class="card-text">Master essential data structures like lists, dictionaries, stacks, and queues in Python.</p>
                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">4.9 ★★★★★ (892 ratings)</small>
                                    <small class="text-muted">Intermediate • 6 weeks</small>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>10% Complete</span>
                                        <span>2 weeks left</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="{{ url('/courses/2/lessons/1') }}" class="btn btn-primary">Continue</a>
                                    <a href="{{ url('/courses/2') }}" class="btn btn-outline-secondary">Course Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="completed" role="tabpanel">
        <div class="row">
            <!-- Completed Course -->
            <div class="col-md-12 mb-4">
                <div class="card horizontal-card">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Web+Development" class="img-fluid rounded-start h-100" alt="Web Development">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Web Development with Flask</h5>
                                    <span class="badge bg-success">Completed</span>
                                </div>
                                <p class="card-text">Build web applications using the Flask framework and deploy them to the cloud.</p>
                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">4.8 ★★★★★ (756 ratings)</small>
                                    <small class="text-muted">Advanced • 8 weeks</small>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-1"><strong>Completed on:</strong> March 15, 2026</p>
                                    <div class="mt-2">
                                        <a href="{{ url('/courses/5') }}" class="btn btn-outline-primary">View Certificate</a>
                                        <a href="{{ url('/courses/5/rate') }}" class="btn btn-outline-secondary">Rate Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="saved" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <p>You haven't saved any courses for later.</p>
                <a href="{{ url('/catalog') }}" class="btn btn-primary">Browse Courses</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Learning Insights</h3>
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