<nav class="sidebar bg-light text-dark" id="sidebar">
    <div class="position-sticky">
        <!-- User Information -->
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle" alt="{{ Auth::user()->name }}" width="50">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    <small class="text-body-secondary">{{ Auth::user()->email }}</small>
                </div>
            </div>
        </div>
        
        <!-- Sidebar Menu -->
        <ul class="nav flex-column">
            <li class="sidebar-heading">Main</li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            
            @can('access-admin')
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Users
                </a>
            </li>
            @endcan
            
            @can('view-products')
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
                    <i class="bi bi-box"></i> Products
                </a>
            </li>
            @endcan
            
            <li class="sidebar-heading">Settings</li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('profile.settings') ? 'active' : '' }}">
                    <i class="bi bi-gear"></i> Account Settings
                </a>
            </li>
            
            @can('manage-settings')
            <li class="nav-item">
                <a href="#" class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                    <i class="bi bi-sliders"></i> System Settings
                </a>
            </li>
            @endcan
        </ul>
    </div>
</nav>