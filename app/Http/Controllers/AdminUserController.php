<?php

namespace App\Http\Controllers;
// use App\Models\User;
use Closure;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserController extends Controller

{

    public function index()
    {
        // Cek apakah user memiliki izin untuk melihat halaman ini
        /** @var User */
        // $user = Auth::user();
        if (!auth()->user()->hasPermissionTo('view-users')) {
            abort(403);
        }

        $users = User::all();
        return view('admin.manage-users', compact('users'));
    }

    public function edit(User $user)
    {
        // Cek apakah user memiliki izin untuk melakukan tindakan ini
        if (!auth()->user()->hasPermissionTo('edit-users')) {
            abort(403);
        }

        // Tampilkan form edit
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.edit-user', compact('user', 'roles', 'permissions'));
    }

    public function update(Request $request, User $user)
    {
        // Cek apakah user memiliki izin untuk melakukan tindakan ini
        if (!auth()->user()->hasPermissionTo('edit-users')) {
            abort(403);
        }

        // Update user
        // Anda harus mengisi ini sesuai dengan form dan validasi yang ada
    }

    public function assignRole(Request $request, User $user)
    {
        // Cek apakah user memiliki izin untuk melakukan tindakan ini
        if (!auth()->user()->hasPermissionTo('assign-roles')) {
            abort(403);
        }

        // Assign role ke user
        // Anda harus mengisi ini sesuai dengan form dan validasi yang ada
    }

    public function managePermissions(Request $request, User $user)
    {
        // Cek apakah user memiliki izin untuk melakukan tindakan ini
        if (!auth()->user()->hasPermissionTo('manage-permissions')) {
            abort(403);
        }

        // Manage permissions user
        // Anda harus mengisi ini sesuai dengan form dan validasi yang ada
    }
}
