<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $key = 'login.' . $request->ip();

    // Cek apakah terlalu banyak percobaan login
    if (RateLimiter::tooManyAttempts($key, 5)) {
        return redirect()->back()->with('error', 'Terlalu banyak percobaan login. Silakan coba lagi setelah beberapa saat.')->withInput();
    }

    // Cari user berdasarkan email
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        // Email tidak ditemukan
        return redirect()->back()->with('error', 'Email tidak terdaftar.')->withInput();
    }

    // Cek apakah email sudah terverifikasi (opsional)
    if (!$user->email_verified_at) {
        return redirect()->back()->with('error', 'Password salah.');
    }

    // Coba autentikasi
    if (!auth()->attempt($request->only('email', 'password'))) {
        RateLimiter::hit($key);
        return redirect()->back()->with('error', 'Password salah.')->withInput();
    }

    // Hapus percobaan login yang gagal
    RateLimiter::clear($key);

    // Redirect ke halaman selamat datang
    return redirect()->route('welcome')->with('success', 'Login berhasil!');
}
public function logout(Request $request)
{
    // Logout user
    auth()->logout();

    // Hapus session
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect ke halaman login atau welcome
    return redirect()->route('login')->with('success', 'Anda telah logout.');
}

    
    
}
