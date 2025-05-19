<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        //validation
       $attributes=$request->validate([
            'name'      => ['required'],
            'email'     => ['required','email','unique:users,email'],
            'password'  => ['required','confirmed',Password::min(6)]
        ]);
        // create a new user
        $user=User::create($attributes);
       //login the user
        Auth::login($user);
    
        return redirect('/url/create');
    }
}
