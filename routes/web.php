<?php

use App\Http\Controllers\Admin\CustomerManageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;

Route::get('/', function () {
    abort(404);
})->middleware('redirect')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');
                
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');
    
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');
    
    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    // Customer
    Route::get('/customer/dashboard', [CustomerDashboardController::class, 'index'])->name('customer.dashboard')->middleware('can:access-customer');
   
    // Admin
    
    Route::middleware('can:access-admin')->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('users', UserController::class);
        Route::resource('admin/customer-manage', CustomerManageController::class);
    });
});