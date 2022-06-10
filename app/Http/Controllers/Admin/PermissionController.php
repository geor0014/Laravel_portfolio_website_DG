<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:permissions',
        ]);

        Permission::create($data);

        return redirect()->route('admin.permissions.index')->with('success', 'Permission created successfully.');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('admin.permissions.index')->with('success', 'Permission deleted successfully.');
    }

    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update($data);

        return redirect()->route('admin.permissions.index')->with('success', 'Permission updated successfully.');
    }
}