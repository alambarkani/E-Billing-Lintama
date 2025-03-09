<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');
        
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        $credentials = [
            $fieldType => $login,
            'password' => $password
        ];


        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            if (Auth::user()->isAdmin() || Auth::user()->isSuperAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            } else {
                return redirect()->intended(route('customer.dashboard'));
            }
        }

        return back()->withErrors([
            'login' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}