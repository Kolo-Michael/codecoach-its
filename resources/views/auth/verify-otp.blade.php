@extends('layouts.auth')

@section('title', 'Verify OTP - CodeCoach ITS')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Verify Your Account</h3>
            </div>
            <div class="card-body">
                <p class="text-center">We've sent a 6-digit code to your email address. Please enter it below to verify your account.</p>
                
                <form method="POST" action="{{ route('otp.verify') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="otp" class="form-label">Verification Code</label>
                        <div class="otp-input-container d-flex justify-content-center">
                            <input type="text" maxlength="1" class="form-control otp-input mx-1 text-center" id="otp1" name="otp[]" required>
                            <input type="text" maxlength="1" class="form-control otp-input mx-1 text-center" id="otp2" name="otp[]" required>
                            <input type="text" maxlength="1" class="form-control otp-input mx-1 text-center" id="otp3" name="otp[]" required>
                            <input type="text" maxlength="1" class="form-control otp-input mx-1 text-center" id="otp4" name="otp[]" required>
                            <input type="text" maxlength="1" class="form-control otp-input mx-1 text-center" id="otp5" name="otp[]" required>
                            <input type="text" maxlength="1" class="form-control otp-input mx-1 text-center" id="otp6" name="otp[]" required>
                        </div>
                        @error('otp')
                            <span class="invalid-feedback d-block text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Verify Account
                        </button>
                    </div>
                </form>
                
                <div class="text-center mt-3">
                    <p>Didn't receive the code? <a href="{{ route('otp.resend') }}">Resend Code</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.otp-input {
    width: 3rem !important;
    height: 3rem;
    font-size: 1.5rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const otpInputs = document.querySelectorAll('.otp-input');
    
    otpInputs.forEach((input, index) => {
        input.addEventListener('input', function() {
            if (this.value.length === 1 && index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }
        });
        
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && this.value === '' && index > 0) {
                otpInputs[index - 1].focus();
            }
        });
    });
});
</script>
@endsection