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
}
