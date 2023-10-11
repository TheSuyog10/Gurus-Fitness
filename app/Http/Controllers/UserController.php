<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.login-register', [

        ]);
    }
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required',],
                'password' => 'required|confirmed|min:6',

                'email' => ['required', 'email', Rule::unique('users', 'email')],
            ]
            ,
            [
                'required' => 'Empty Fields',
                'email' => 'Invalid Email',
                'min' => 'Weak Password, must be at least 6 characters',
                'confirmed' => "Passwords Don't match",
                'unique' => 'Email address you entered is already in use'
            ]
        );

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);


        //login User
        auth()->login($user);
        // Flash a success message to the session and redirect to the login page
        return redirect('/')->with('message', 'Signed up and Logged In Successfully');


    }
    //Logout User
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out');
    }
    //Login User / Authentication
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([

            'password' => 'required',

            'email' => ['required', 'email'],
        ], [
            'required' => 'Empty Fields',
            'email' => 'Invalid Credentials',
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are Logged In');
        } else {
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }
    }
}