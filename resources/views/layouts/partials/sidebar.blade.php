<!-- Sidebar for mobile -->
<div x-show="sidebarOpen" class="fixed inset-0 z-40 flex md:hidden"
    x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

    <!-- Sidebar backdrop -->
    <div class="fixed inset-0" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-600 opacity-75" @click="sidebarOpen = false"></div>
    </div>

    <!-- Sidebar panel -->
    <div class="relative flex flex-col flex-1 w-full max-w-xs bg-white">
        <div class="absolute top-0 right-0 pt-2 -mr-12">
            <button
                class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                @click="sidebarOpen = false">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile sidebar content -->
        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <img class="w-auto h-8"
                    src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
                    alt="Your Company Logo">
            </div>
            <nav class="px-2 mt-5 space-y-1">
                <!-- Navigation Links -->
                <div>
                    <h3 class="px-3 text-xs font-semibold tracking-wider text-gray-500 uppercase">
                        Main
                    </h3>
                    <!-- Desktop Navigation Links -->
                    <a href="{{ route('home') }}"
                        class="flex mt-2 space-y-1 items-center px-2 py-2 text-sm font-medium text-gray-600 @if (request()->routeIs('admin.dashboard') || request()->routeIs('customer.dashboard')) text-white bg-indigo-600 @else hover:bg-gray-50 hover:text-gray-900 group @endif rounded-md">
                        <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>
                </div>
                <div x-data="{ open: false }" class="space-y-1">
                    <a href="#" @click.prevent="open = !open"
                        class="flex items-center justify-between px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Data Pelanggan
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200"
                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Dropdown menu that expands within the sidebar -->
                    <div x-show="open" x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-96"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-96" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden pl-8 ml-1 border-l border-indigo-100">

                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Semua Pelanggan
                        </a>
                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Pelanggan Lunas
                        </a>
                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Pelanggan Belum Lunas
                        </a>
                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Pelanggan Nunggak
                        </a>
                    </div>
                </div>
                <a href="#"
                    class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    Projects
                </a>
                <a href="#"
                    class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Calendar
                </a>
                <a href="#"
                    class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    Documents
                </a>
                <a href="#"
                    class="flex items-center px-2 py-2 text-base font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-4 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Reports
                </a>
                <div>
                    <h3 class="px-3 text-xs font-semibold tracking-wider text-gray-500 uppercase">
                        Manage
                    </h3>
                    <!-- Desktop Navigation Links -->
                    <a href="{{ route('users.index') }}"
                        class="flex mt-2 space-y-1 items-center px-2 py-2 text-sm font-medium text-gray-600 @if (request()->routeIs('users.*')) text-white bg-indigo-600 @else hover:bg-gray-50 hover:text-gray-900 group @endif rounded-md">
                        <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                        </svg>
                        Users
                    </a>
                </div>
            </nav>
        </div>

        <!-- Mobile sidebar footer with user info -->
        <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
            <a href="#" class="flex-shrink-0 block group">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block w-10 h-10 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="ml-3">
                        <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">Tom Cook</p>
                        <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="flex-shrink-0 w-14">
        <!-- Force sidebar to shrink to fit close icon -->
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <div class="flex flex-col flex-1 min-h-0 bg-white border-r border-gray-200">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <img class="w-auto h-8"
                    src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg"
                    alt="Your Company Logo">
            </div>
            <nav class="flex-1 px-2 mt-5 space-y-1 bg-white">
                <div>
                    <h3 class="px-3 text-xs font-semibold tracking-wider text-gray-500 uppercase">
                        Main
                    </h3>
                    <!-- Desktop Navigation Links -->
                    <a href="{{ route('home') }}"
                        class="flex mt-2 space-y-1 items-center px-2 py-2 text-sm font-medium text-gray-600 @if (request()->routeIs('admin.dashboard') || request()->routeIs('customer.dashboard')) text-white bg-indigo-600 @else hover:bg-gray-50 hover:text-gray-900 group @endif rounded-md">
                        <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>
                </div>
                <!-- Parent menu item with dropdown -->
                <div x-data="{ open: false }" class="space-y-1">
                    <!-- Main menu item (clickable) -->
                    <a @click.prevent="open = !open" href="#"
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400 mr-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            Data Pelanggan
                        </div>
                        <!-- Dropdown arrow -->
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200"
                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <!-- Dropdown menu that expands within the sidebar -->
                    <div x-show="open" x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-96"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-96" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden pl-8 ml-1 border-l border-indigo-100">

                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Semua Pelanggan
                        </a>
                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Pelanggan Lunas
                        </a>
                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Pelanggan Belum Lunas
                        </a>
                        <a href="#"
                            class="flex py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Pelanggan Nunggak
                        </a>
                    </div>
                </div>
                <a href="#"
                    class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                    Projects
                </a>
                <a href="#"
                    class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Calendar
                </a>
                <a href="#"
                    class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    Documents
                </a>
                <a href="#"
                    class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                    <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Reports
                </a>
                <div>
                    <h3 class="px-3 text-xs font-semibold tracking-wider text-gray-500 uppercase">
                        Manage
                    </h3>
                    <!-- Desktop Navigation Links -->
                    <a href="{{ route('users.index') }}"
                        class="flex mt-2 space-y-1 items-center px-2 py-2 text-sm font-medium text-gray-600 @if (request()->routeIs('users.*')) text-white bg-indigo-600 @else hover:bg-gray-50 hover:text-gray-900 group @endif rounded-md">
                        <svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                        </svg>
                        Users
                    </a>
                </div>
            </nav>
        </div>

        <!-- Desktop sidebar footer with user info -->
        <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
            <a href="#" class="flex-shrink-0 block w-full group">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block rounded-full h-9 w-9"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Tom Cook</p>
                        <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">View profile</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
