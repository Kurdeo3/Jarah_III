<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.loginPage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate(); 

            return redirect()->intended('/admin.dashboard'); 
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        $admin::guard('admin')->logout();

        $request->session()->invalidated();
        $request->session()->regenerateToken();

        return redirect('admin.loginPage');
    }

    public function home(){
        return view('home');
    }
}
