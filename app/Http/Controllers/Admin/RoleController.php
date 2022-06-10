<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::WhereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:roles',
        ]);

        Role::create($data);

        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);

        $role->update($data);

        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Role deleted successfully.');
    }

    public function attachPermissions(Request $request, Role $role)
    {

        if ($role->hasPermissionTo($request->permission)) {
            return back()->with('success', 'Permission already attached to role.');
        }

        $role->givePermissionTo($request->permission);

        return back()->with('success', 'Permissions attached successfully.');
    }

    public function detachPermissions(Role $role, Permission $permission)
    {
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('success', 'Permission removed from role.');
        }

        return back()->with('success', 'Permission not attached to role.');
    }
}
