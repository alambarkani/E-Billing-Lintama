<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        if ($role == 'admin' && !Auth::user()->isAdmin()) {
            return redirect('customer/dashboard');
        }

        if ($role == 'customer' && !Auth::user()->isCustomer()) {
            return redirect('admin/dashboard');
        }

        return $next($request);
    }
}
