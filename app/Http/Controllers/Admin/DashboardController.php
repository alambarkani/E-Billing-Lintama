<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Gate::denies('access-admin')) {
            return redirect()->route('customer.dashboard');
        }
        return view('admin.dashboard');
    }
}
