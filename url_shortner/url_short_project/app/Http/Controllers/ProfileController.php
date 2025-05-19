<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile=User::where('id',auth()->id())->firstOrFail();
        // dd(hash($profile->password));
        return view('auth.profile',[
            'profile'=>$profile
        ]);
    }
    
    public function update(Request $request){
     //validate
        $profile=$request->validate([
            'name' => ['required'],
            'email' => ['required']
        ]);
     
        //authorize
        //updaet the job
        $user=User::where('id',auth()->id())->firstOrFail();
      
        User::where('id',$user->id)
        ->update([
            'name'=>$profile['name'],
            'email'=>$profile['email']
        ]);

        //redirect to the job pagae
        return redirect('/profile');
    
    }
    
    public function destroy(){
        // authorixze
        //delete all the urls created
        //delete all the messages
        
    }
}
