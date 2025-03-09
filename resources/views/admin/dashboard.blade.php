<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="py-6">
        <div class="px-4 mx-auto sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        </div>

        <div class="px-4 mx-auto sm:px-6 md:px-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Stat Card 1 -->
                <div class="overflow-hidden bg-sky-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                                </svg>

                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Jumlah Admin</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="{{ route('users.index') }}"
                                        class="relative inline-flex items-center py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="overflow-hidden bg-amber-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Jumlah Pelanggan</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="overflow-hidden bg-green-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Pelanggan Lunas</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="overflow-hidden bg-rose-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Pelanggan Belum Lunas</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 5 -->
                <div class="overflow-hidden bg-red-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Pelanggan Nunggak</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 6 -->
                <div class="overflow-hidden bg-orange-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M18.5 12A2.5 2.5 0 0 1 21 9.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2.5a2.5 2.5 0 0 1 0 5V17a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2.5a2.5 2.5 0 0 1-2.5-2.5Z" />
                                </svg>

                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Ticket Masuk</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 7 -->
                <div class="overflow-hidden bg-yellow-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-800 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Ticket Pending</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 8 -->
                <div class="overflow-hidden bg-emerald-200 rounded-lg shadow">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4 5a2 2 0 0 0-2 2v2.5a1 1 0 0 0 1 1 1.5 1.5 0 1 1 0 3 1 1 0 0 0-1 1V17a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2.5a1 1 0 0 0-1-1 1.5 1.5 0 1 1 0-3 1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H4Z" />
                                </svg>
                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium text-slate-800 truncate">Ticket Close</dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold text-slate-900">1,432</div>
                                    </dd>
                                    <a href="#"
                                        class="relative inline-flex items-center  py-2 text-sm font-medium text-indigo-600 bg-transparent focus:outline-none hover:text-indigo-800 hover:underline">
                                        Lihat Selengkapnya
                                    </a>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Sections -->
            <div class="grid grid-cols-1 gap-5 mt-8 lg:grid-cols-2">
                <!-- Line Chart -->
                <div class="p-4 bg-white rounded-lg shadow sm:p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Sales Overview</h3>
                        <div class="flex items-center space-x-2">
                            <div class="relative">
                                <select id="sales-time-range"
                                    class="block py-2 pl-3 pr-10 text-sm border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="7days">Last 7 Days</option>
                                    <option value="30days" selected>Last 30 Days</option>
                                    <option value="90days">Last 90 Days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <canvas id="salesChart" height="300"></canvas>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="p-4 bg-white rounded-lg shadow sm:p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Revenue by Product</h3>
                        <div class="flex items-center space-x-2">
                            <div class="relative">
                                <select id="product-time-range"
                                    class="block py-2 pl-3 pr-10 text-sm border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="monthly" selected>Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <canvas id="productChart" height="300"></canvas>
                    </div>
                </div>

                <!-- Doughnut Chart -->
                <div class="p-4 bg-white rounded-lg shadow sm:p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Traffic Sources</h3>
                    </div>
                    <div class="flex items-center justify-center pt-2">
                        <div style="max-width: 400px;">
                            <canvas id="trafficChart" height="300"></canvas>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-3 md:grid-cols-4">
                        <div class="flex items-center">
                            <span class="inline-block w-3 h-3 mr-2 bg-indigo-500 rounded-full"></span>
                            <span class="text-sm text-gray-600">Organic Search</span>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-block w-3 h-3 mr-2 bg-blue-500 rounded-full"></span>
                            <span class="text-sm text-gray-600">Direct</span>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-block w-3 h-3 mr-2 bg-green-500 rounded-full"></span>
                            <span class="text-sm text-gray-600">Social Media</span>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-block w-3 h-3 mr-2 bg-yellow-500 rounded-full"></span>
                            <span class="text-sm text-gray-600">Referral</span>
                        </div>
                    </div>
                </div>

                <!-- Progress Chart -->
                <div class="p-4 bg-white rounded-lg shadow sm:p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Project Status</h3>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-1">
                            <h4 class="text-sm font-medium text-gray-600">Website Redesign</h4>
                            <span class="text-sm font-medium text-indigo-700">75%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-1">
                            <h4 class="text-sm font-medium text-gray-600">Mobile App Development</h4>
                            <span class="text-sm font-medium text-indigo-700">62%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 62%"></div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-1">
                            <h4 class="text-sm font-medium text-gray-600">Database Migration</h4>
                            <span class="text-sm font-medium text-indigo-700">89%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 89%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <h4 class="text-sm font-medium text-gray-600">API Integration</h4>
                            <span class="text-sm font-medium text-indigo-700">35%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="mt-8">
                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                        <div class="flex flex-wrap items-center justify-between -mt-2 -ml-4 sm:flex-nowrap">
                            <div class="mt-2 ml-4">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Activities</h3>
                            </div>
                            <div class="flex-shrink-0 mt-2 ml-4">
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <ul role="list" class="divide-y divide-gray-200">
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full">
                                                <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm font-medium text-gray-900">New order <span
                                                    class="font-semibold">#38294</span> has been placed</p>
                                        </div>
                                        <div class="flex items-center ml-2 text-sm text-gray-500">
                                            <svg class="w-5 h-5 mr-1.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            2 hours ago
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full">
                                                <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm font-medium text-gray-900">New customer <span
                                                    class="font-semibold">John Smith</span> registered</p>
                                        </div>
                                        <div class="flex items-center ml-2 text-sm text-gray-500">
                                            <svg class="w-5 h-5 mr-1.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            5 hours ago
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 bg-yellow-100 rounded-full">
                                                <svg class="w-6 h-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm font-medium text-gray-900">Inventory running low for
                                                <span class="font-semibold">Product XYZ</span>
                                            </p>
                                        </div>
                                        <div class="flex items-center ml-2 text-sm text-gray-500">
                                            <svg class="w-5 h-5 mr-1.5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            1 day ago
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-full">
                                                <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm font-medium text-gray-900">Payment failed for invoice
                                                <span class="font-semibold">#INV-8721</span>
                                            </p>
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
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js"></script>

    <!-- Chart Initialization Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Line Chart - Sales Overview
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: 'Sales',
                        data: [12500, 19200, 15300, 21400, 18500, 24700, 22800, 24100, 26200, 23400,
                            28700, 32100
                        ],
                        backgroundColor: 'rgba(99, 102, 241, 0.1)',
                        borderColor: 'rgba(99, 102, 241, 1)',
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            backgroundColor: 'rgba(17, 24, 39, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: 'rgba(75, 85, 99, 0.2)',
                            borderWidth: 1,
                            padding: 10,
                            displayColors: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [2, 4],
                                color: 'rgba(156, 163, 175, 0.2)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Bar Chart - Revenue by Product
            const productCtx = document.getElementById('productChart').getContext('2d');
            const productChart = new Chart(productCtx, {
                type: 'bar',
                data: {
                    labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
                    datasets: [{
                        label: 'Revenue',
                        data: [15400, 11600, 9800, 12300, 8700],
                        backgroundColor: [
                            'rgba(99, 102, 241, 0.8)',
                            'rgba(79, 70, 229, 0.8)',
                            'rgba(59, 130, 246, 0.8)',
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(245, 158, 11, 0.8)'
                        ],
                        borderWidth: 0,
                        borderRadius: 4
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(17, 24, 39, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: 'rgba(75, 85, 99, 0.2)',
                            borderWidth: 1,
                            padding: 10,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    return '$' + context.parsed.y.toLocaleString();
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [2, 4],
                                color: 'rgba(156, 163, 175, 0.2)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Doughnut Chart - Traffic Sources
            const trafficCtx = document.getElementById('trafficChart').getContext('2d');
            const trafficChart = new Chart(trafficCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Organic Search', 'Direct', 'Social Media', 'Referral'],
                    datasets: [{
                        data: [45, 25, 20, 10],
                        backgroundColor: [
                            'rgba(99, 102, 241, 1)',
                            'rgba(59, 130, 246, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(245, 158, 11, 1)'
                        ],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    cutout: '65%',
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(17, 24, 39, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: 'rgba(75, 85, 99, 0.2)',
                            borderWidth: 1,
                            padding: 10,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.parsed + '%';
                                }
                            }
                        }
                    }
                }
            });

            // Handle filter changes for sales chart
            document.getElementById('sales-time-range').addEventListener('change', function() {
                // Simulate data refresh based on selection
                const range = this.value;
                let data = [];

                if (range === '7days') {
                    data = [21400, 19700, 18500, 22300, 23900, 24500, 26800];
                    salesChart.data.labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                } else if (range === '30days') {
                    // Current data
                    data = [12500, 19200, 15300, 21400, 18500, 24700, 22800, 24100, 26200, 23400, 28700,
                        32100
                    ];
                    salesChart.data.labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                        'Oct', 'Nov', 'Dec'
                    ];
                } else if (range === '90days') {
                    // Simulate quarterly data
                    data = [45000, 56000, 68000, 72000];
                    salesChart.data.labels = ['Q1', 'Q2', 'Q3', 'Q4'];
                }

                salesChart.data.datasets[0].data = data;
                salesChart.update();
            });

            // Handle filter changes for product chart
            document.getElementById('product-time-range').addEventListener('change', function() {
                // Simulate data refresh based on selection
                const range = this.value;
                let data = [];

                if (range === 'monthly') {
                    // Current data
                    data = [15400, 11600, 9800, 12300, 8700];
                } else if (range === 'quarterly') {
                    data = [42000, 35000, 28000, 38000, 26000];
                } else if (range === 'yearly') {
                    data = [185000, 152000, 115000, 143000, 98000];
                }

                productChart.data.datasets[0].data = data;
                productChart.update();
            });
        });
    </script>
@endsection
