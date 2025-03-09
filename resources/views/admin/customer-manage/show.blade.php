@extends('layouts.app')

@section('content')
    <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Customer Profile: {{ $customer->user->name }}
                    </h2>
                </div>
                <div class="flex flex-shrink-0 mt-4 space-x-3 md:mt-0">
                    <a href="{{ route('customer-manage.edit', $customer) }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Edit Customer
                    </a>
                    <a href="{{ route('customer-manage.index') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Back to Customers
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-12 h-12">
                            <img class="w-12 h-12 rounded-full"
                                src="{{ $customer->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($customer->user->name) . '&color=7F9CF5&background=EBF4FF' }}"
                                alt="{{ $customer->user->name }}">
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                {{ $customer->user->name }}
                            </h3>
                            <p class="max-w-2xl mt-1 text-sm text-gray-500">
                                {{ $customer->user->email }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                ID Pelanggan
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->given_id }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Username
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->user->username }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                No. KTP/KK/Kartu Pelajar
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->identity_number }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Foto KTP/KK/Kartu Pelajar
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img src="{{ asset($customer->identity_scan_path) }}" alt="Foto Identitas" class=" w-52">
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Alamat
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->address }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Foto Lokasi
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img src="{{ asset($customer->location_image_path) }}" alt="Foto Lokasi" class="w-52">
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                No. Telepon/WA
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->phone_number }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Member Since
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->created_at->format('F d, Y') }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Last Updated
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $customer->updated_at->format('F d, Y') }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Additional Information (Activity Log) -->
            <div class="mt-6 overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Activity</h3>
                    <p class="max-w-2xl mt-1 text-sm text-gray-500">User's recent system activity.</p>
                </div>
                <div class="border-t border-gray-200">
                    <ul role="list" class="divide-y divide-gray-200">
                        <!-- Sample activity items - in a real app, these would come from the database -->
                        <li class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full">
                                        <svg class="w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">Logged in to the system</p>
                                </div>
                                <div class="flex items-center ml-2 text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-1.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Just now
                                </div>
                            </div>
                        </li>
                        <li class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-full">
                                        <svg class="w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">Updated profile information</p>
                                </div>
                                <div class="flex items-center ml-2 text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-1.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    2 days ago
                                </div>
                            </div>
                        </li>
                        <li class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-8 h-8 bg-purple-100 rounded-full">
                                        <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">Completed training module: Security Awareness</p>
                                </div>
                                <div class="flex items-center ml-2 text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-1.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    1 week ago
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
