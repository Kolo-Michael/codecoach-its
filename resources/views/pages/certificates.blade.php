@extends('layouts.app')

@section('title', 'My Certificates - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>My Certificates</h1>
        <p class="lead">View and share your achievements</p>
    </div>
</div>

<div class="row">
    <!-- Certificate 1 -->
    <div class="col-md-6 mb-4">
        <div class="card certificate-card h-100">
            <div class="card-body text-center">
                <div class="certificate-badge mb-3">
                    <i class="fas fa-certificate fa-5x text-primary"></i>
                </div>
                <h5 class="card-title">Web Development with Flask</h5>
                <p class="card-text">Awarded on March 15, 2026</p>
                <div class="mt-3">
                    <a href="{{ url('/certificates/1') }}" class="btn btn-primary">View Certificate</a>
                    <button class="btn btn-outline-secondary">Share</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Certificate 2 -->
    <div class="col-md-6 mb-4">
        <div class="card certificate-card h-100">
            <div class="card-body text-center">
                <div class="certificate-badge mb-3">
                    <i class="fas fa-certificate fa-5x text-primary"></i>
                </div>
                <h5 class="card-title">Python Fundamentals</h5>
                <p class="card-text">Awarded on January 22, 2026</p>
                <div class="mt-3">
                    <a href="{{ url('/certificates/2') }}" class="btn btn-primary">View Certificate</a>
                    <button class="btn btn-outline-secondary">Share</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Certificate Details</h3>
            </div>
            <div class="card-body">
                <h5>Web Development with Flask Certificate</h5>
                <p>This certificate verifies that you have successfully completed the Web Development with Flask course, demonstrating proficiency in building web applications using the Flask framework.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Course:</strong> Web Development with Flask</p>
                        <p><strong>Completion Date:</strong> March 15, 2026</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Grade:</strong> 95%</p>
                        <p><strong>Course Duration:</strong> 8 weeks</p>
                        <p><strong>Certificate ID:</strong> CC-FLASK-2026-03-15</p>
                    </div>
                </div>
                
                <div class="mt-4 text-center">
                    <img src="https://placehold.co/600x400/0056D2/FFFFFF?text=Certificate+Image" class="img-fluid" alt="Certificate">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection