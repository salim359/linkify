<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Date;

class UrlController extends Controller
{

  
    public function create(){
        $urls=Url::query()->where('user_id',auth()->id())
        ->latest()->paginate(10);
        
        $username=auth()->user()->name;
        
        return view('url.create',[
        'urls'=>$urls,
        'username'=>$username
        ]);
      
    
    }
    
    
    public function store(Request $request){
    
       $url= $request->validate([
            'url'=>['required'],// add activeurl  'url' => ['required', 'url', 'regex:/^https?:\/\//i'],
        ]);
        
        do {
            $short = Str::random(5);
        } while (Url::where('short_code', $short)->exists());

        $shortcode = $short;
        

        //store them both
        $url=Url::create([
            'user_id' => auth()->id(),
            'long_url'=>$url['url'],
            'short_code'=>$shortcode,
            'expires_at'=> Carbon::now()->addDays(30)
        ]);
        // dd($url['short_code']);
       
        return redirect('/url/create');
       
        
    }
    
    public function destroy($id)
    {   
        $url=Url::where('id',$id)->firstOrFail();
        $url->delete();
        return redirect('/url/create');
    }
}

