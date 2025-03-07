<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Gate::denies('access-customer')) {
            return redirect()->route('admin.dashboard');
        }
        return view('customer.dashboard');
    }
}
