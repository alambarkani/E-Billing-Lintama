<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        Gate::authorize('viewAny', User::class);
        $query = User::query();

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('username', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%")
                  ->orWhere('role', 'like', "%{$searchTerm}%");
            });
        }

        // Role filter
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        // Sorting
        $sortColumn = $request->sort ?? 'created_at';
        $sortDirection = $request->direction ?? 'desc';
        $allowedColumns = ['name', 'username', 'email', 'role', 'created_at'];
        
        if (in_array($sortColumn, $allowedColumns)) {
            $query->orderBy($sortColumn, $sortDirection);
        }

        $users = $query->paginate(10);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        Gate::authorize('create', User::class);
        return view('users.create');
    }

    public function store(Request $request)
    {
        Gate::authorize('create', User::class);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:admin,superadmin,customer'],
        ]);
        
        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('users.show', $user)
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        Gate::authorize('viewAny', User::class);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        Gate::authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        Gate::authorize('update', $user);
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        // Update basic user information
        $user->name = $validated['name'];
        $user->username = $validated['username'];
        $user->email = $validated['email'];

        // Update password if provided
        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        return redirect()->route('users.show', $user)
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        Gate::authorize('delete', $user);
        // Prevent self-deletion
        if (Auth::user()->id === $user->id) {
            return redirect()->route('users.index')
                ->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
