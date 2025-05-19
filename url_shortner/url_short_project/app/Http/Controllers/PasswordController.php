<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
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
            'password'=>$password['password']
        ]);

        //redirect to the job pagae
        request()->session()->flash('sucess');
        return redirect('/profile');
    }

  
}
