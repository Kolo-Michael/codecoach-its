@extends('layouts.app')

@section('title', 'Community - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>CodeCoach Community</h1>
        <p class="lead">Connect with fellow learners and instructors</p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Discussion Forums</h5>
                <a href="#" class="btn btn-primary btn-sm">New Topic</a>
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Python Fundamentals Help</h6>
                        <small>2 hours ago</small>
                    </div>
                    <p class="mb-1">Having trouble with the loops exercise in Week 3. Can someone explain...</p>
                    <small class="text-muted">Started by Jane Smith • 15 replies</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Project Showcase - Web Apps</h6>
                        <small>1 day ago</small>
                    </div>
                    <p class="mb-1">Share your completed Flask projects here! Would love to see what everyone built.</p>
                    <small class="text-muted">Started by Mike Johnson • 8 replies</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Study Groups</h6>
                        <small>2 days ago</small>
                    </div>
                    <p class="mb-1">Looking for study partners for the Data Science specialization. Who's interested?</p>
                    <small class="text-muted">Started by Alex Chen • 22 replies</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Career Advice</h6>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Just completed my certificate and looking for entry-level positions. Any tips?</p>
                    <small class="text-muted">Started by Sarah Williams • 12 replies</small>
                </a>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Recent Activity</h5>
            </div>
            <div class="card-body">
                <div class="activity-feed">
                    <div class="activity-item mb-3">
                        <div class="d-flex">
                            <img src="https://placehold.co/40x40/CCCCCC/FFFFFF?text=JD" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 class="mb-1">John Doe <small class="text-muted">completed a lesson</small></h6>
                                <p class="mb-1">Finished "Variables and Data Types" in Python Fundamentals</p>
                                <small class="text-muted">2 hours ago</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="activity-item mb-3">
                        <div class="d-flex">
                            <img src="https://placehold.co/40x40/CCCCCC/FFFFFF?text=JS" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 class="mb-1">Jane Smith <small class="text-muted">earned an achievement</small></h6>
                                <p class="mb-1">Earned the "Quick Learner" badge for completing 5 lessons in one day</p>
                                <small class="text-muted">4 hours ago</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="activity-item mb-3">
                        <div class="d-flex">
                            <img src="https://placehold.co/40x40/CCCCCC/FFFFFF?text=MJ" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 class="mb-1">Mike Johnson <small class="text-muted">posted in forum</small></h6>
                                <p class="mb-1">Replied to "Python Fundamentals Help" - Check out this solution...</p>
                                <small class="text-muted">6 hours ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Community Stats</h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <h3>12,458</h3>
                    <p class="mb-0">Active Learners</p>
                </div>
                <hr>
                <div class="text-center">
                    <h3>892</h3>
                    <p class="mb-0">Forum Posts Today</p>
                </div>
                <hr>
                <div class="text-center">
                    <h3>45</h3>
                    <p class="mb-0">Study Groups</p>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Popular Topics</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Python Fundamentals
                    <span class="badge bg-primary rounded-pill">142</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Web Development
                    <span class="badge bg-primary rounded-pill">98</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Data Science
                    <span class="badge bg-primary rounded-pill">87</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Career Advice
                    <span class="badge bg-primary rounded-pill">65</span>
                </a>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Upcoming Events</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Python Q&A Session</h6>
                        <small>Mar 25</small>
                    </div>
                    <small class="text-muted">Live session with instructor Sarah Johnson</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Data Science Workshop</h6>
                        <small>Mar 28</small>
                    </div>
                    <small class="text-muted">Hands-on workshop with real datasets</small>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection