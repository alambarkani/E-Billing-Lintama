<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CustomerManageController extends Controller
{
    //

    public function __construct()
    {
        Gate::authorize('access-admin');
    }

    public function index(Request $request)
    {
        $userQuery = User::whereHas('customer');
        $customerQuery = Customer::query();

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $customerQuery->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('given_id', 'like', "%{$searchTerm}%")
                  ->orWhere('username', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%")
                  ->orWhere('identity_number', 'like', "%{$searchTerm}%")
                  ->orWhere('address', 'like', "%{$searchTerm}%")
                  ->orWhere('phone_number', 'like', "%{$searchTerm}%");
            });
        }

        // Sorting
        $sortColumn = $request->sort ?? 'created_at';
        $sortDirection = $request->direction ?? 'desc';
        $allowedColumns = ['name', 'given_id', 'username', 'email', 'identity_number', 'address', 'phone_number', 'created_at'];
        
        if (in_array($sortColumn, $allowedColumns)) {
            $customerQuery->orderBy($sortColumn, $sortDirection);
        }

        $customers = $customerQuery->paginate(10);

        return view('admin.customer-manage.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customer-manage.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'given_id' => ['required', 'string', 'max:255', 'unique:customers'],
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'identity_number' => ['required', 'string', 'max:255', 'unique:customers'],
            'identity_scan_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'address' => ['required', 'string', 'max:255'],
            'location_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'phone_number' => ['required', 'string', 'max:255'],
        ]);

        if ($request->hasFile('identity_scan_image')) {
            $identity = $request->file('identity_scan_image');
            $identityFileName = $request->username . '.' . $identity->getClientOriginalExtension();
            $identity->storeAs("customer/$request->identity_number/identity_scans", $identityFileName, 'public');
            $identityScanPath = "storage/customer/$request->identity_number/identity_scans/$identityFileName";
        }

        if ($request->hasFile('location_image')) {
            $location = $request->file('location_image');
            $locationFileName = $request->username . '.' . $location->getClientOriginalExtension();
            $location->storeAs("customer/$request->identity_number/location_images", $locationFileName, 'public');
            $locationImagePath = "storage/customer/$request->identity_number/location_images/$locationFileName";
        }
        
        // Create the customer
        $customer = Customer::create([
            'user_id' => User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'role' => 'customer',
            ])->id,
            'given_id' => $validated['given_id'],
            'identity_number' => $validated['identity_number'],
            'identity_scan_path' => $validated['identity_scan_image']  ? $identityScanPath : null,
            'address' => $validated['address'],
            'location_image_path' => $validated['location_image'] ? $locationImagePath : null,
            'phone_number' => $validated['phone_number'],
        ]);

        return redirect()->route('customer-manage.show', $customer)
            ->with('success', 'Customer created successfully.');
    }

    public function show(Customer $customer_manage)
    {
        $customer = $customer_manage->load('user');
        return view('admin.customer-manage.show', compact('customer'));
    }

    public function edit(Customer $customer_manage)
    {
        $customer = $customer_manage->load('user');
        return view('admin.customer-manage.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer_manage)
    {
        $customer = Customer::find($customer_manage->id);
        $validated = $request->validate([
            'given_id' => ['required', 'string', 'max:255', Rule::unique('customers')->ignore($customer->id)],
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($customer->user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($customer->user->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'identity_number' => ['required', 'string', 'max:255', Rule::unique('customers')->ignore($customer->id)],
            'identity_scan_image' => ['nullable', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'location_image' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
        ]);

        // Update basic user information
        $customer->user->name = $validated['name'];
        $customer->user->username = $validated['username'];
        $customer->user->email = $validated['email'];

        if ($request->hasFile('identity_scan_image')) {
            Storage::disk('public')->delete($customer->identity_scan_path);

            $identity = $request->file('identity_scan_image');
            $identityFileName = $request->username . '.' . $identity->getClientOriginalExtension();
            $identity->storeAs("customer/$request->identity_number/identity_scans", $identityFileName, 'public');
            $identityScanPath = "storage/customer/$request->identity_number/identity_scans/$identityFileName";
            $customer->identity_scan_path = $identityScanPath;
        }

        if ($request->hasFile('location_image')) {
            Storage::disk('public')->delete($customer->location_image_path);

            $locationImage = $request->file('location_image');
            $locationImageName = $request->username . '.' . $locationImage->getClientOriginalExtension();
            $locationImage->storeAs("customer/$request->identity_number/location_images", $locationImageName, 'public');
            $locationImagePath = "storage/customer/$request->identity_number/location_images/$locationImageName";
            $customer->location_image_path = $locationImagePath;
        }

        // Update customer information
        $customer->given_id = $validated['given_id'];
        $customer->identity_number = $validated['identity_number'];
        $customer->address = $validated['address'];
        $customer->phone_number = $validated['phone_number'];

        // Update password if provided
        if (!empty($validated['password'])) {
            $customer->user->password = bcrypt($validated['password']);
        }

        $customer->save();

        return redirect()->route('customer-manage.show', $customer)
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer_manage)
    {
        
        $customer = Customer::find($customer_manage->id); // Find the customer
        Storage::disk('public')->deleteDirectory("customer/$customer->identity_number/identity_scans");
        Storage::disk('public')->deleteDirectory("customer/$customer->identity_number/location_images");
        \Log::info($customer);
        $customer->delete(); // Delete the associated user

        return redirect()->route('customer-manage.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
