@extends('layouts.app')

@section('title', 'Settings - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/profile') }}">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <i class="fas fa-user me-2"></i> Profile Settings
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fas fa-bell me-2"></i> Notification Preferences
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fas fa-lock me-2"></i> Privacy Settings
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fas fa-credit-card me-2"></i> Payment Methods
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fas fa-language me-2"></i> Language Preferences
            </a>
        </div>
    </div>
    
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Profile Settings</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-3 col-form-label">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="fullName" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="email" class="col-md-3 col-form-label">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="bio" class="col-md-3 col-form-label">Bio</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="bio" rows="3" placeholder="Tell us about yourself..."></textarea>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="avatar" class="col-md-3 col-form-label">Profile Picture</label>
                        <div class="col-md-9">
                            <img src="https://placehold.co/100x100/CCCCCC/FFFFFF?text={{ substr(Auth::user()->name, 0, 1) }}" class="rounded-circle mb-2" alt="Profile Picture">
                            <input type="file" class="form-control" id="avatar">
                            <small class="text-muted">Upload a JPG, PNG, or GIF (max 2MB)</small>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="timezone" class="col-md-3 col-form-label">Time Zone</label>
                        <div class="col-md-9">
                            <select class="form-select" id="timezone">
                                <option value="UTC">UTC</option>
                                <option value="America/New_York">Eastern Time (US & Canada)</option>
                                <option value="Europe/London">London</option>
                                <option value="Asia/Tokyo">Tokyo</option>
                                <option value="Africa/Lagos" selected>Lagos</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="mb-0">Learning Preferences</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Learning Goals</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="goalCareer">
                                <label class="form-check-label" for="goalCareer">
                                    Career advancement
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="goalSkills">
                                <label class="form-check-label" for="goalSkills">
                                    Skill development
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="goalHobby">
                                <label class="form-check-label" for="goalHobby">
                                    Personal interest/hobby
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Experience Level</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experience" id="expBeginner" checked>
                                <label class="form-check-label" for="expBeginner">
                                    Beginner
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experience" id="expIntermediate">
                                <label class="form-check-label" for="expIntermediate">
                                    Intermediate
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experience" id="expAdvanced">
                                <label class="form-check-label" for="expAdvanced">
                                    Advanced
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Preferred Learning Style</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="styleVideo">
                                <label class="form-check-label" for="styleVideo">
                                    Video lectures
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="styleReading">
                                <label class="form-check-label" for="styleReading">
                                    Reading materials
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="styleHandsOn">
                                <label class="form-check-label" for="styleHandsOn">
                                    Hands-on projects
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="styleQuizzes">
                                <label class="form-check-label" for="styleQuizzes">
                                    Quizzes and assessments
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Save Preferences</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection