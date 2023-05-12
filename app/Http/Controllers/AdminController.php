<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard');
            return view('Admin.Dashboard.dashboard')->with('users', $request);
        }
        return back()->withErrors([
            'password' => 'Email atau Password anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
