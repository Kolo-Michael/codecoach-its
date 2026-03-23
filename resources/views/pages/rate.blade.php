@extends('layouts.app')

@section('title', 'Rate Course - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/learning') }}">My Learning</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses/5') }}">Web Development with Flask</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rate Course</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">Rate This Course</h2>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <h3>Web Development with Flask</h3>
                    <p class="text-muted">Completed on March 15, 2026</p>
                </div>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://placehold.co/100x100/0056D2/FFFFFF?text=Flask" class="rounded me-3" alt="Course Image">
                            <div>
                                <h5 class="mb-1">Web Development with Flask</h5>
                                <p class="mb-0">Build web applications using the Flask framework and deploy them to the cloud.</p>
                                <div class="mt-2">
                                    <span class="badge bg-primary">Advanced</span>
                                    <span class="badge bg-secondary">8 weeks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <form>
                    <div class="mb-4">
                        <label class="form-label">Overall Rating</label>
                        <div class="rating-stars">
                            <div class="star-rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label for="star5" title="5 stars">&#9733;</label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label for="star4" title="4 stars">&#9733;</label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label for="star3" title="3 stars">&#9733;</label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label for="star2" title="2 stars">&#9733;</label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label for="star1" title="1 star">&#9733;</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="review" class="form-label">Detailed Review (Optional)</label>
                        <textarea class="form-control" id="review" rows="5" placeholder="Share your experience with this course. What did you like? How could it be improved?"></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label">Would you recommend this course?</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recommend" id="recommendYes" value="yes">
                                <label class="form-check-label" for="recommendYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recommend" id="recommendNo" value="no">
                                <label class="form-check-label" for="recommendNo">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('/learning') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit Rating</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.rating-stars {
    display: flex;
    justify-content: center;
}

.star-rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
}

.star-rating input[type="radio"] {
    display: none;
}

.star-rating label {
    color: #ddd;
    font-size: 2rem;
    cursor: pointer;
    transition: color 0.2s;
}

.star-rating label:before {
    content: "\2605";
    margin: 0 0.1rem;
}

.star-rating input[type="radio"]:checked ~ label,
.star-rating input[type="radio"]:hover ~ label {
    color: #ffc107;
}

.star-rating label:hover,
.star-rating label:hover ~ label {
    color: #ffdb4d !important;
}
</style>
@endsection