<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function create(){

        return view('auth.register');

    }
    public function store(){

        $attributes = request()->validate([
            'first_name' => ['required',],
            'last_name'=> ['required'],
            'email'=> ['required', 'email','max:254', 'unique:users,email'],
            'password'=> ['required', Password::min(6), 'confirmed'],
        ]); 

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}
