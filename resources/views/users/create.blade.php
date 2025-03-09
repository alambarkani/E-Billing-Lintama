@extends('layouts.app')

@section('content')
    <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Add New User
                    </h2>
                </div>
                <div class="flex mt-4 md:mt-0 md:ml-4">
                    <a href="{{ route('users.index') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Back to Users
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">User Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Create a new user account.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <!-- Name -->
                                    <div class="col-span-6">
                                        <label for="name" class="block text-sm font-medium text-gray-700">Full
                                            Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required autofocus>
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Username -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="username"
                                            class="block text-sm font-medium text-gray-700">Username</label>
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
                                            Address</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Role -->
                                    <div class="col-span-6">
                                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                        <select id="role" name="role"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="superadmin" {{ old('role') == 'superadmin' ? 'selected' : '' }}>
                                                Super Admin</option>
                                        </select>
                                        @error('role')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="password"
                                            class="block text-sm font-medium text-gray-700">Password</label>
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
                                            class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="block w-full mt-1 h-10 p-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Create User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
