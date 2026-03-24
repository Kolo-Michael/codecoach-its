@extends('layouts.app')

@section('title', 'Course Completed - CodeCoach ITS')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card text-center">
            <div class="card-body">
                <div class="mb-4">
                    <i class="fas fa-certificate fa-5x text-success"></i>
                </div>
                
                <h1 class="card-title">Congratulations!</h1>
                <p class="card-text lead">You've successfully completed the course</p>
                
                <h2 class="mt-4">Web Development with Flask</h2>
                <p class="text-muted">You've earned a certificate of completion</p>
                
                <div class="mt-4">
                    <p>Your grade: <strong>95%</strong></p>
                    <p>Completion date: <strong>March 15, 2026</strong></p>
                </div>
                
                <div class="mt-4">
                    <a href="{{ url('/certificates/1') }}" class="btn btn-primary btn-lg">View Certificate</a>
                    <a href="{{ url('/courses/5/rate') }}" class="btn btn-outline-secondary btn-lg">Rate This Course</a>
                </div>
                
                <div class="mt-5">
                    <h5>Continue Your Learning Journey</h5>
                    <p>Check out these recommended courses:</p>
                    
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/300x150/0056D2/FFFFFF?text=Django" class="card-img-top" alt="Django">
                                <div class="card-body">
                                    <h6 class="card-title">Django Framework</h6>
                                    <a href="{{ url('/courses/6') }}" class="btn btn-sm btn-primary">View Course</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/300x150/0056D2/FFFFFF?text=API+Development" class="card-img-top" alt="API Development">
                                <div class="card-body">
                                    <h6 class="card-title">RESTful API Development</h6>
                                    <a href="{{ url('/courses/7') }}" class="btn btn-sm btn-primary">View Course</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/300x150/0056D2/FFFFFF?text=Deployment" class="card-img-top" alt="Deployment">
                                <div class="card-body">
                                    <h6 class="card-title">Application Deployment</h6>
                                    <a href="{{ url('/courses/8') }}" class="btn btn-sm btn-primary">View Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection