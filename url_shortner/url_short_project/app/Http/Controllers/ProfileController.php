<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Url;
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
       
        $user=User::where('id',auth()->id())->firstOrFail();
        if($user->id == auth()->id()){
        
            $urls=Url::where('user_id',$user->id)->get();
            foreach($urls as $url){
                $url->delete();
            }
            
            $contacts=Contact::where('user_id',$user->id)->get();
            foreach($contacts as $contact){
                $contact->delete();
            }
            
            $user->delete();
            
        }
        return redirect('/');
      
        
    }
}
