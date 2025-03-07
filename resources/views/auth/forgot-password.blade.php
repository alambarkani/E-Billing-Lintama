@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="auth-card">
                <h2 class="text-center mb-4">Forgot Password?</h2>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" placeholder="E.g. johndoe@email.com" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">
                        Send Password Reset Link
                    </button>
                </form>

                <div class="text-center mt-4">
                    Remember your password? 
                    <a href="{{ route('login') }}" class="text-primary">Login instead</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection