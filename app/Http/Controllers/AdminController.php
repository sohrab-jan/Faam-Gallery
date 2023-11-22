<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login_form()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            Session::flash('message', 'Invalid Email or Password');

            return back()->with('message', 'wrong');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function view_category()
    {
        return view('admin.category');
    }

    //todo: admin logout functionality
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('login.form');
    }

    public function updatePassword()
    {
        return view('admin/update_password');
    }

    public function checkCurrentPassword(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        //        else {
        //            Session::flash('error-message', 'Invalid Email or Password');
        //            return back();
        //        }

    }
}
