<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str as SupportStr;
use PDO;

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

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin-dashboard')->with('success', 'You are now logged in as admin.');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function register_form()
    {
        return view('admin.register');
    }
    public function register(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6'
        ]);

        Admin::insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'], ['rounds' => 12]),
            'created_at' => Carbon::now(),
            'email_verified_at' => Carbon::now(),
            'remember_token' => SupportStr::random(60),
        ]);

        return redirect('/')->with('success', 'Admin account created successfully.');
    }
}
