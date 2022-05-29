<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login-form');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect('/admin-dashboard')->with('success', 'You are now logged in as admin.');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
