<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function create()
    {
        return view('registration.create');
    }


    public function store(Request $request)
    {
        // Validate the form

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password'  => 'required|confirmed'
        ]);


        // Create and save user

        $user = User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);


        // Sign in user
        auth()->login($user);


        // redirect to home page
        return redirect()->home();
    }

}
