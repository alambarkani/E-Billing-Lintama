@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="auth-card">
                <img src="images/logo.jpg" alt="Logo" class="mx-auto d-block mb-4" style="width: 100px">
                <h2 class="text-center mb-4 fw-bold">Login</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="login" class="mb-2">Email atau Username</label>
                        <input type="text" class="form-control @error('login') is-invalid @enderror" 
                        name="login" id="login" placeholder="Masukkan email atau username" value="{{ old('login') }}" autofocus required>
                        @error('login')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="mb-2">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                        name="password" id="password" placeholder="Masukkan password" required>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Ingat Saya</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-muted">Lupa Password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <div class="text-center mt-4">
                    Belum langganan? 
                    <a href="{{ route('register') }}" class="text-primary">Daftar sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection