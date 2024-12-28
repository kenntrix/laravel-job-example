<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;



class SessionController extends Controller
{
    public function login(){

        return view('auth.login');
    }

    public function store(){

        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!auth()->attempt($credentials)) {
            // return back()->withErrors(['email' => 'Invalid credentials.']);
            throw ValidationException::withMessages(['email'=> 'credentials did not match']);
        };

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(){
        
        auth()->logout();

        return redirect('/');
    }
}
