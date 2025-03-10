<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectRoleDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        if (Auth::user()->isCustomer()) {
            return redirect('customer/dashboard');
        }

        if (Auth::user()->isAdmin() || Auth::user()->isSuperAdmin()) {
            return redirect('admin/dashboard');
        }

        return $next($request);
    }
}
