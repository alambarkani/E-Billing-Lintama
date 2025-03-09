@extends('layouts.app')

@section('content')
    <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Add New Customer
                    </h2>
                </div>
                <div class="flex mt-4 md:mt-0 md:ml-4">
                    <a href="{{ route('customer-manage.index') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Back to Customers
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Customer Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Create a new customer account.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('customer-manage.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <!-- Name -->
                                    <div class="col-span-6">
                                        <label for="name" class="block text-sm font-medium text-gray-700">Nama
                                            Lengkap <span class="text-red-500">*</span></label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required autofocus>
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- ID Pelanggan -->
                                    <div class="col-span-6">
                                        <label for="given_id" class="block text-sm font-medium text-gray-700">ID Pelanggan
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="given_id" id="given_id" value="{{ old('given_id') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                        @error('given_id')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Username -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="username" class="block text-sm font-medium text-gray-700">Username <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" name="username" id="username" value="{{ old('username') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                        @error('username')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email
                                            Address <span class="text-red-500">*</span></label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Identity Number -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="identity_number" class="block text-sm font-medium text-gray-700">No.
                                            KTP/KK/Kartu Pelajar <span class="text-red-500">*</span></label>
                                        <input type="text" name="identity_number" id="identity_number"
                                            value="{{ old('identity_number') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                        @error('identity_number')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Identity Scan -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="identity_scan_image"
                                            class="block text-sm font-medium text-gray-700">Foto
                                            KTP/KK/Kartu Pelajar <span
                                                class="text-gray-500 text-sm">(Optional)</span></label>
                                        <input type="file" name="identity_scan_image" id="identity_scan_image"
                                            value="{{ old('identity_scan_image') }}"
                                            class="block w-full mt-1 h-10 file:bg-indigo-400 file:text-white file:h-full file:px-3 file:font-bold border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm text-gray-900 border cursor-pointer bg-gray-50 focus:outline-none">
                                        @error('identity_scan_image')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="col-span-6">
                                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat
                                            <span class="text-red-500">*</span></label>
                                        <textarea name="address" id="address" rows="4"
                                            class="block w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>{{ old('address') }}</textarea>
                                        @error('address')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Location Image -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="location_image" class="block text-sm font-medium text-gray-700">Foto
                                            Lokasi <span class="text-gray-500 text-sm">(Optional)</span></label>
                                        <input type="file" name="location_image" id="location_image"
                                            value="{{ old('location_image') }}"
                                            class="block w-full mt-1 h-10 file:bg-indigo-400 file:text-white file:h-full file:px-3 file:font-bold border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm text-gray-900 border cursor-pointer bg-gray-50 focus:outline-none">
                                        @error('location_image')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="phone_number" class="block text-sm font-medium text-gray-700">No
                                            Telepon/WA
                                            <span class="text-red-500">*</span></label>
                                        <div class="flex mt-1">
                                            <div
                                                class="inline-flex items-center px-3 text-sm text-gray-500 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md">
                                                +62</div>
                                            <input type="tel" name="phone_number" id="phone_number"
                                                value="{{ old('phone_number') }}"
                                                class="block w-full h-10 p-2 border-gray-300 rounded-e-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                required>
                                        </div>
                                        @error('phone_number')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="password" class="block text-sm font-medium text-gray-700">Password
                                            <span class="text-red-500">*</span></label>
                                        <input type="password" name="password" id="password"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                        @error('password')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="password_confirmation"
                                            class="block text-sm font-medium text-gray-700">Confirm Password <span
                                                class="text-red-500">*</span></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm cursor-pointer hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Create Customer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
