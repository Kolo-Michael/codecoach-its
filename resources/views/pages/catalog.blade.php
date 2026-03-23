@extends('layouts.app')

@section('title', 'Course Catalog - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Course Catalog</h1>
        <p class="lead">Explore our comprehensive collection of Python programming courses</p>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="card sidebar">
            <div class="card-header">
                <h5>Filter Courses</h5>
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
                
                <h6 class="mt-3">Duration</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="short" checked>
                    <label class="form-check-label" for="short">1-4 weeks</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medium" checked>
                    <label class="form-check-label" for="medium">5-8 weeks</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="long" checked>
                    <label class="form-check-label" for="long">8+ weeks</label>
                </div>
                
                <h6 class="mt-3">Skills</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="python" checked>
                    <label class="form-check-label" for="python">Python</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="data-science" checked>
                    <label class="form-check-label" for="data-science">Data Science</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="web-dev" checked>
                    <label class="form-check-label" for="web-dev">Web Development</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="algorithms" checked>
                    <label class="form-check-label" for="algorithms">Algorithms</label>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <p class="mb-0">Showing 12 of 48 courses</p>
            </div>
            <div>
                <select class="form-select">
                    <option>Most Popular</option>
                    <option>Newest</option>
                    <option>Title A-Z</option>
                    <option>Highest Rated</option>
                </select>
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
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">4.8 ★★★★★</small>
                                <small class="text-muted">Beginner</small>
                            </div>
                            <div class="progress mt-2 mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <a href="{{ url('/courses/1') }}" class="btn btn-primary w-100">View Course</a>
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
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">4.9 ★★★★★</small>
                                <small class="text-muted">Intermediate</small>
                            </div>
                            <div class="progress mt-2 mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <a href="{{ url('/courses/2') }}" class="btn btn-primary w-100">View Course</a>
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
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">4.7 ★★★★★</small>
                                <small class="text-muted">Advanced</small>
                            </div>
                            <div class="progress mt-2 mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <a href="{{ url('/courses/3') }}" class="btn btn-primary w-100">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Course 4 -->
            <div class="col-md-4 mb-4">
                <div class="card course-card h-100">
                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=OOP" class="card-img-top" alt="OOP">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Object-Oriented Programming</h5>
                        <p class="card-text">Master OOP concepts in Python including classes, inheritance, and polymorphism.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">4.6 ★★★★★</small>
                                <small class="text-muted">Intermediate</small>
                            </div>
                            <div class="progress mt-2 mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <a href="{{ url('/courses/4') }}" class="btn btn-primary w-100">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Course 5 -->
            <div class="col-md-4 mb-4">
                <div class="card course-card h-100">
                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Web+Development" class="card-img-top" alt="Web Development">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Web Development with Flask</h5>
                        <p class="card-text">Build web applications using the Flask framework and deploy them to the cloud.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">4.8 ★★★★★</small>
                                <small class="text-muted">Advanced</small>
                            </div>
                            <div class="progress mt-2 mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <a href="{{ url('/courses/5') }}" class="btn btn-primary w-100">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Course 6 -->
            <div class="col-md-4 mb-4">
                <div class="card course-card h-100">
                    <img src="https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Science" class="card-img-top" alt="Data Science">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Data Science with Python</h5>
                        <p class="card-text">Analyze data and create visualizations using pandas, numpy, and matplotlib.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">4.9 ★★★★★</small>
                                <small class="text-muted">Intermediate</small>
                            </div>
                            <div class="progress mt-2 mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <a href="{{ url('/courses/6') }}" class="btn btn-primary w-100">View Course</a>
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
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection