<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('index'));

        }

        return view('auth.login');
    }

    public function registration()
    {
        if (Auth::check()) {
            return redirect(route('index'));

        }

        return view('users.registration');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('index'));
        }

        return redirect(route('login'))->with('error', 'Login details are not valid');
    }

    public function registrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if (! $user) {
            return redirect(route('registration'))->with('error', 'Registration failed, try again.');
        }

        return redirect(route('login'))->with('success', 'Registration success, Login to access the app.');

    }

    public function userprofile()
    {
        return view('users.user-profile');
    }

    public function index()
    {
        return view('pages.home');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }
}
