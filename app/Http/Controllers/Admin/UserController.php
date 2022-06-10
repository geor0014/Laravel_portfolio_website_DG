<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::WhereNotIn('name', ['Ahab'])->get();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.users.show', compact('user', 'roles'));
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    public function attachRoles(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return redirect()->back()->with('error', 'User already has this role');
        }
        $user->assignRole($request->role);

        return redirect()->back()->with('success', 'Role attached successfully');
    }

    public function detachRoles(User $user, Role $role)
    {

        if ($user->hasRole($role->name)) {
            $user->removeRole($role->name);
            return redirect()->back()->with('success', 'Role detached successfully');
        }
        return redirect()->back()->with('error', 'User does not have this role');
    }
}
