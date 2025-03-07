@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="auth-card">
                <h2 class="text-center mb-4">Reset Password</h2>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" 
                               name="email" value="{{ $email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               name="password" placeholder="Enter new password" required>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" 
                               name="password_confirmation" placeholder="Confirm new password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">
                        Reset Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection