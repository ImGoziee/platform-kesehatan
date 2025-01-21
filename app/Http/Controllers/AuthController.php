<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login'); // Mengarahkan ke view login (resources/views/auth/login.blade.php)
    }

    // Memproses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard'); // Redirect ke dashboard jika berhasil login
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
