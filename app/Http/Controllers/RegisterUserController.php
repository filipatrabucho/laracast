<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create() 
    {
       return view('auth.register');
    }

    public function store()
    {
       // validate
       $attributes = request()->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required', Password::min(6), 'confirmed'],
       ]);

       // Create the User
       $user = User::create($attributes);
       
       // Log in
       Auth::login($user);

       // Redirect Somewhere
       return redirect('/jobs');
    }
}
