<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
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
                'noTelp' => 'required|min:10|max:13|regex:/^[0-9]{11,13}$/',
                'address' => 'required',
                'gender' => 'required',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|min:8',
            ]);
            if ($credentials['password'] !== $credentials['confirmPassword']) {
                return back()->with('registerError', 'Password tidak Cocok!');
            }
            $credentials['password'] = Hash::make($credentials['password']);
            User::create($credentials);
            return to_route('registered');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function registered()
    {
        return view('info.registered');
    }
}
