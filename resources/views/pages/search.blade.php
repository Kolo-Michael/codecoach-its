@extends('layouts.app')

@section('title', 'Search Results - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Search Results for "Python"</h1>
        <p class="lead">Found 24 courses, 8 specializations, and 3 degrees</p>
    </div>
</div>

<ul class="nav nav-tabs mb-4" id="searchTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab">Courses</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="specializations-tab" data-bs-toggle="tab" data-bs-target="#specializations" type="button" role="tab">Specializations</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="degrees-tab" data-bs-toggle="tab" data-bs-target="#degrees" type="button" role="tab">Degrees</button>
    </li>
</ul>

<div class="tab-content" id="searchTabsContent">
    <div class="tab-pane fade show active" id="courses" role="tabpanel">
        <div class="row">
            <div class="col-md-3">
                <div class="card sidebar">
                    <div class="card-header">
                        <h5>Filter Results</h5>
                    </div>
                    <div class="card-body">
                        <h6>Difficulty Level</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="beginner" checked>
                            <label class="form-check-label" for="beginner">Beginner</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="intermediate" checked>
                            <label class="form-check-label" for="intermediate">Intermediate</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="advanced" checked>
                            <label class="form-check-label" for="advanced">Advanced</label>
                        </div>
                        
                        <h6 class="mt-3">Language</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="english" checked>
                            <label class="form-check-label" for="english">English</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="spanish">
                            <label class="form-check-label" for="spanish">Spanish</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="french">
                            <label class="form-check-label" for="french">French</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <p class="mb-0">Showing 1-12 of 24 courses</p>
                    </div>
                    <div>
                        <select class="form-select">
                            <option>Most Relevant</option>
                            <option>Most Popular</option>
                            <option>Newest</option>
                            <option>Highest Rated</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Course 1 -->
                    <div class="col-md-12 mb-4">
                        <div class="card horizontal-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Python+Basics" class="img-fluid rounded-start h-100" alt="Python Basics">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Python for Everybody</h5>
                                        <p class="card-text">Learn to Program and Analyze Data with Python. Develop programs to gather, clean, analyze, and visualize data.</p>
                                        <div class="d-flex justify-content-between">
                                            <small class="text-muted">4.8 ★★★★★ (12,543 ratings)</small>
                                            <small class="text-muted">Beginner • 4 weeks</small>
                                        </div>
                                        <div class="mt-2">
                                            <span class="badge bg-primary">University of Michigan</span>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ url('/courses/1') }}" class="btn btn-primary">Enroll</a>
                                            <a href="{{ url('/courses/1') }}" class="btn btn-outline-secondary">Preview</a>
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
                                <div class="col-md-4">
                                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Science" class="img-fluid rounded-start h-100" alt="Data Science">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Applied Data Science with Python</h5>
                                        <p class="card-text">Gain new insights into data and apply statistical inference techniques to real-world business challenges.</p>
                                        <div class="d-flex justify-content-between">
                                            <small class="text-muted">4.7 ★★★★★ (8,921 ratings)</small>
                                            <small class="text-muted">Intermediate • 5 weeks</small>
                                        </div>
                                        <div class="mt-2">
                                            <span class="badge bg-primary">IBM</span>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ url('/courses/2') }}" class="btn btn-primary">Enroll</a>
                                            <a href="{{ url('/courses/2') }}" class="btn btn-outline-secondary">Preview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="specializations" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <p>Specializations content would go here...</p>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="degrees" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <p>Degrees content would go here...</p>
            </div>
        </div>
    </div>
</div>
@endsection