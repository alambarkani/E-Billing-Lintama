<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {   
        Gate::define('access-admin', function (User $user) {
            return $user->isAdmin() || $user->isSuperAdmin();
        });

        Gate::define('access-customer', function (User $user) {
            return $user->isCustomer();
        });
    }
}
