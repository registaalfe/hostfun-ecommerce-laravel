<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function loginForm()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function registerForm()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        // Jika validate lolos selanjutnya akan kita ambil dulu si password untuk di bcrypt
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('login')->with('success', 'Registration successfull! Please login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); //regenerate untuk menghindari session fixation

            // Cek peran (roles) pengguna yang berhasil login
            if (Auth::user()->roles === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('index');
            }
        }

        return back()->withErrors([
            'email' => 'Login failed',
        ])->onlyInput('email');
    }
}
