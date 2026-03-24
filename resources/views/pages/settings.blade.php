@extends('layouts.app')

@section('title', 'Account Settings - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Account Settings</h1>
        <p class="lead">Manage your account preferences and security settings</p>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action active">Profile Information</a>
                <a href="#" class="list-group-item list-group-item-action">Security</a>
                <a href="#" class="list-group-item list-group-item-action">Notifications</a>
                <a href="#" class="list-group-item list-group-item-action">Privacy</a>
                <a href="#" class="list-group-item list-group-item-action">Subscription</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Profile Information</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" value="John Doe">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" value="john.doe@example.com">
                    </div>
                    
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control" id="bio" rows="3">Learning Python programming to advance my career in software development.</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="avatar">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Security</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h6 class="mb-0">Password</h6>
                        <p class="mb-0 text-muted">Last changed 2 months ago</p>
                    </div>
                    <a href="{{ route('password.request') }}" class="btn btn-outline-primary">Change Password</a>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h6 class="mb-0">Two-Factor Authentication</h6>
                        <p class="mb-0 text-muted">Add an extra layer of security to your account</p>
                    </div>
                    <button class="btn btn-outline-secondary">Enable</button>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Active Sessions</h6>
                        <p class="mb-0 text-muted">Manage devices where you're logged in</p>
                    </div>
                    <button class="btn btn-outline-danger">Sign Out All Devices</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection