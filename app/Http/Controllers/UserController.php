<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:7|max:255',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'You have registered successful.');
        } else {
            return back()()->with('message', 'error|There was an error...');
        }

    }

    public function login()
    {
        return view('auth.login');
    }
}

//
//    public function show($id)
//    {
//        User::destroy($id);
//
//        return redirect()->back()->withSuccess('User Created Successfully.');
//    }
//
//    public function index()
//    {
//        $data = User::all();
//
//        return view('users.index', compact('data'));
//    }
//
////    public function store(UserStore $request)
////    {
////        $input = $request->validated();
////        $input['password'] = bcrypt($input['password']);
////        User::create($input);
////
////        return redirect()->back()->withSuccess('User Added Successfully.');
////    }
//
//    public function edit($id)
//    {
//        $data = User::find($id);
//
//        return view('users.edit', compact('data'));
//    }
//
//    public function update(UserStore $request, $id)
//    {
//        $input = $request->validated();
//        $input['password'] = bcrypt($input['password']);
//        User::where('id', $id)->update($input);
//
//        return redirect()->back()->withSuccess('User Updated Successfully.');
//    }
//
//    public function login(string $id): View
//    {
//        return view('login', [
//            'user' => User::findOrFail($id),
//        ]);
//    }
