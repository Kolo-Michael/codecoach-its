@extends('layouts.app')

@section('title', 'Help Center - CodeCoach ITS')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Help Center</h1>
        <p class="lead">Find answers to common questions and get support</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card help-sidebar">
            <div class="card-header">
                <h5>Help Topics</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="#getting-started" class="list-group-item list-group-item-action">Getting Started</a>
                <a href="#account-management" class="list-group-item list-group-item-action">Account Management</a>
                <a href="#course-access" class="list-group-item list-group-item-action">Course Access</a>
                <a href="#technical-issues" class="list-group-item list-group-item-action">Technical Issues</a>
                <a href="#billing-payments" class="list-group-item list-group-item-action">Billing & Payments</a>
                <a href="#certificates" class="list-group-item list-group-item-action">Certificates</a>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-body">
                <h5>Contact Support</h5>
                <p>Can't find what you're looking for?</p>
                <a href="#" class="btn btn-primary w-100">Submit a Request</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 id="getting-started">Getting Started</h2>
                <div class="accordion" id="helpAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                How do I create an account?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#helpAccordion">
                            <div class="accordion-body">
                                To create an account on CodeCoach ITS, follow these steps:
                                <ol>
                                    <li>Click the "Register" button in the top right corner of the homepage</li>
                                    <li>Enter your full name, email address, and create a password</li>
                                    <li>Click "Register" to create your account</li>
                                    <li>Check your email for a verification message and click the verification link</li>
                                </ol>
                                Once verified, you can log in and start exploring our courses.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                How do I enroll in a course?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#helpAccordion">
                            <div class="accordion-body">
                                To enroll in a course:
                                <ol>
                                    <li>Browse courses through the "Courses" or "Catalog" sections</li>
                                    <li>Click on a course to view its details</li>
                                    <li>Click the "Enroll Now" or "Start Learning" button</li>
                                    <li>If the course is paid, you'll be prompted to complete payment</li>
                                    <li>Once enrolled, the course will appear in your "My Learning" section</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                What are the system requirements?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#helpAccordion">
                            <div class="accordion-body">
                                CodeCoach ITS works on most modern devices and browsers:
                                <ul>
                                    <li><strong>Operating Systems:</strong> Windows 10+, macOS 10.14+, Linux (Ubuntu 18.04+)</li>
                                    <li><strong>Browsers:</strong> Chrome 80+, Firefox 75+, Safari 13+, Edge 80+</li>
                                    <li><strong>Internet Connection:</strong> Minimum 5 Mbps download speed recommended</li>
                                    <li><strong>Additional Requirements:</strong> JavaScript enabled, cookies enabled</li>
                                </ul>
                                For coding exercises, we recommend having Python 3.8+ installed locally.
                            </div>
                        </div>
                    </div>
                </div>
                
                <h2 class="mt-5" id="account-management">Account Management</h2>
                <div class="accordion" id="accountAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                How do I reset my password?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accountAccordion">
                            <div class="accordion-body">
                                To reset your password:
                                <ol>
                                    <li>Go to the login page and click "Forgot Password"</li>
                                    <li>Enter your email address</li>
                                    <li>Check your inbox for a password reset email</li>
                                    <li>Click the reset link in the email</li>
                                    <li>Enter your new password twice and save</li>
                                </ol>
                                If you don't receive the email within 10 minutes, check your spam folder.
                            </div>
                        </div>
                    </div>
                </div>
                
                <h2 class="mt-5" id="course-access">Course Access</h2>
                <div class="accordion" id="courseAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                How long do I have access to course materials?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                <p>Access duration depends on the type of enrollment:</p>
                                <ul>
                                    <li><strong>Free courses:</strong> Lifetime access</li>
                                    <li><strong>Paid courses:</strong> Lifetime access</li>
                                    <li><strong>Specializations:</strong> Lifetime access</li>
                                    <li><strong>Subscription:</strong> Access for the duration of subscription</li>
                                </ul>
                                <p>You can access your enrolled courses anytime through the "My Learning" section.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection