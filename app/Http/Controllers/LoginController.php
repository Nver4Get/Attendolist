<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('landingpage');
    }
    public function login(Request $request)
    {
        // Validasi input login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah user berhasil login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke dashboard atau halaman tujuan
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Sesuaikan dengan route dashboard kamu
            }

            // Jika login gagal, kembalikan ke halaman login dengan error
            throw ValidationException::withMessages([
                'email' => __('auth.failed'), // Menampilkan pesan error jika autentikasi gagal
                ]);
            }
            // Logout (Metode logout)
            public function logout(Request $request)
            {
                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect('/login');
            }
}
