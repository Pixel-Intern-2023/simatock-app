<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        if ($request->method() === 'GET') {
            return view('Auth.login');
        } elseif ($request->method() === 'POST') {
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }
            return back()->with('loginError', 'Login Gagal!');
        }
    }
    public function register(Request $request)
    {
        if ($request->method() === 'GET') {
            return view('Auth.register');
        } elseif ($request->method() === 'POST') {
            $credentials = $request->validate([
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email:dns',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|min:8',
            ]);
            if ($credentials['password'] !== $credentials['confirmPassword']) {
                return session()->flash('registerError', 'Password tidak Cocok!');
            }
            $credentials['password'] = Hash::make($credentials['password']);
            User::create($credentials);
            return redirect('/');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
