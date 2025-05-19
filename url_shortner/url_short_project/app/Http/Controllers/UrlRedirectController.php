<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;


class UrlRedirectController extends Controller
{
    
public function index($shortcode)
{
    $url=Url::where('short_code',$shortcode)->firstOrFail();
    $originalpath= $url->long_url;
    // dd($originalpath);
    return redirect($originalpath);
}
}
