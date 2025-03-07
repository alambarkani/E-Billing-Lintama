<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container-fluid">
        <!-- Sidebar Toggle Button -->
        <button class="btn btn-link text-light me-2 d-lg-none" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
        
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        
        
        <!-- Navbar Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            
            <!-- Right Side -->
            <ul class="navbar-nav">
                <!-- Notifications -->
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        @if($notificationCount = Auth::user()->unreadNotifications->count())
                            <span class="badge bg-danger rounded-pill">{{ $notificationCount }}</span>
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header">Notifications</h6></li>
                        
                        @forelse(Auth::user()->notifications()->latest()->take(5)->get() as $notification)
                            <li>
                                <a class="dropdown-item {{ $notification->read_at ? '' : 'fw-bold' }}" 
                                   href="{{ route('notifications.show', $notification) }}">
                                    {{ Str::limit($notification->data['message'], 30) }}
                                </a>
                            </li>
                        @empty
                            <li><span class="dropdown-item">No notifications</span></li>
                        @endforelse
                        
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('notifications.index') }}">View all</a></li>
                    </ul>
                </li> --}}
                
                <!-- User Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile.settings') }}">Settings</a></li> --}}
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>