@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="auth-card">
                <img src="images/logo.jpg" alt="Logo" class="mx-auto d-block mb-4" style="width: 100px">
                <h2 class="text-center mb-4 fw-bold">Daftar</h2>

                <form method="POST" action="{{ route('register') }}" class="row g-3">
                    @csrf
                    <div class="mb-2 col-md-12">
                        <label for="name" class="mb-2">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                               name="name" id="name" placeholder="Contoh: John Doe" required>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-6">
                        <label for="username" class="mb-2">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"  value="{{ old('username') }}"
                               name="username" id="username" placeholder="Contoh: johndoe123" required>
                        @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-6">
                        <label for="email" class="mb-2">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                               name="email" id="email" placeholder="Contoh: johndoe@email.com" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-6">
                        <label for="identity_number" class="mb-2 form-label">Nomor KTP/KK/Kartu Pelajar <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('identity_number') is-invalid @enderror"  value="{{ old('identity_number') }}"
                               name="identity_number" id="identity_number" placeholder="Contoh: 35125313213123" required>
                        @error('identity_number')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-6">
                        <label for="identity_image" class="mb-2 form-label">Foto KTP/KK/Kartu Pelajar <span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('identity_image') is-invalid @enderror"  value="{{ old('identity_image') }}"
                               name="identity_image" id="identity_image" required>
                    </div>

                    <div class="mb-2 col-md-12">
                        <label for="address" class="mb-2 form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea name="address" id="address" rows="4" placeholder="Contoh: Jl. Raya Jakarta No. 1" class="form-control @error('address') is-invalid @enderror" required>{{ old('address') }}</textarea>
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-12">
                        <label for="location_image" class="mb-2 form-label">Foto Rumah/Lokasi pemasangan</label>
                        <input type="file" class="form-control @error('location_image') is-invalid @enderror"  value="{{ old('location_image') }}"
                               name="location_image" id="location_image">
                        @error('location_image')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-12">
                        <label for="phone" class="mb-2">Nomor Telepon/WA <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                               name="phone" id="phone" placeholder="Contoh: 08123456789" required>
                        @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-12">
                        <label for="internet_package" class="mb-2">Paket Internet</label>
                        <select name="internet_package_id" id="internet_package_id" class="form-select form-select-lg">
                            <option disabled selected>Pilih Paket Internet</option>
                            @foreach ($internetPackages as $package)
                                <option value="{{ $package->id }}">{{ $package->name }} - Rp {{ number_format($package->price, 0, ',', '.') }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2 col-md-6">
                        <label for="password" class="mb-2">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               name="password" id="password" placeholder="Buat password anda" required>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2 col-md-6">
                        <label for="password_confirmation" class="mb-2">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" 
                               name="password_confirmation" id="password_confirmation" placeholder="Ulangi password anda" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </form>

                <div class="text-center mt-4">
                    Sudah berlangganan? 
                    <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection