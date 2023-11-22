<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        validation::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required' | 'confirmed',
        ])->validate();

    }
}
