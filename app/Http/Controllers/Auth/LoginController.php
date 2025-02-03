<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Jika berhasil login, redirect ke halaman dashboard atau halaman yang dituju
            return redirect()->intended('/dashboard');
        }

        // Jika gagal login
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

// php artisan tinker

// \App\Models\User::create([
//     'name' => 'John Doe',
//     'email' => 'johndoe@example.com',
//     'password' => bcrypt('password123'),
// ]);

