<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        return view('contact');
    }


    public function store(Request $request)
    {
    
        if(!auth()->id()){
            //guest 
            $message=$request->validate([
            'email' => ['required','email'],
            'name'  => ['required'],
            'message'=>['required']
        ]);
        
            Contact::create($message);
            //send email to admin(which is me)
            return redirect('/');
        }else{
            $currentUser=User::where('id',auth()->id())->firstOrFail();
          
            $message=$request->validate([
            'message'=>['required']
        ]);
           
            Contact::create([
                'user_id'=>$currentUser->id,
                'email' =>$currentUser->email,
                'name'  => $currentUser->name,
                'message'=> $message['message']
                ]);
            //send email to admin(which is me)
            return redirect('/url/create');
        }
     
    }

}
   

