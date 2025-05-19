<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
   
  
    public function update(Request $request)
    {
          //validate
        $password=$request->validate([
            'password'  => ['required','confirmed',Password::min(6)],
            
        ]);
       
        //authorize
        //updaet the job
        $user=User::where('id',auth()->id())->firstOrFail();
    
        User::where('id',$user->id)
        ->update([
            'password'=> Hash::make( $password['password']),
        ]);

         // Flash success message
        session()->flash('success', 'Password updated successfully.');
        return redirect('/profile');
         }

  
}
