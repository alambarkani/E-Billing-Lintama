<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @vite('resources/css/app.css')

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <div x-data="{ sidebarOpen: false }">
            @include('layouts.partials.sidebar')
            <!-- Topbar and main content -->
            <div class="flex flex-col flex-1 md:pl-64">
                @include('layouts.partials.topbar')
                <!-- Main content area -->
                <main class="flex-1">
                    <div class="py-6">
                        <div class="px-4 sm:px-6 md:px-8">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
