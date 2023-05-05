<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'name'=> 'required',
            'email'=>['required','email'],
            'password'=>'required|confirmed|min:6'
        ]);
        // dd($formFields);
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        // dd($user);

        return redirect('/companies');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/companies');
    }

    public function login() {
        return view('users.login');
    }

    public function auth(Request $request) {

        $formFields = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        // auth()->login($formFields);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/companies');
        }
        return "Invalid Login";
    }

    public function manage() {
        // dd([auth()->user()->company()->get()]);
        return view('users.manage', ['companies'=> auth()->user()->company()->get()]);
    }
}
