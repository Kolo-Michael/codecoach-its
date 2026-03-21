@extends('layouts.app')

@section('title', 'Profile - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="mb-0">Your Profile</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center mb-4">
                        <img src="https://placehold.co/150x150/CCCCCC/FFFFFF?text={{ substr(Auth::user()->name, 0, 1) }}" class="rounded-circle mb-3" alt="Profile Picture">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="col-md-9">
                        <h4>Account Information</h4>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 30%;">Full Name</th>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email Address</th>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Member Since</th>
                                        <td>{{ Auth::user()->created_at->format('F j, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Last Login</th>
                                        <td>{{ Auth::user()->updated_at->format('F j, Y g:i A') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <h4 class="mt-4">Learning Progress</h4>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                        </div>
                        <p>You've completed 1 out of 4 courses</p>
                        
                        <div class="mt-4">
                            <button class="btn btn-outline-primary me-2">Edit Profile</button>
                            <button class="btn btn-outline-secondary">Change Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection