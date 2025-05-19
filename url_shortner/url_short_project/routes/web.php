<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UrlRedirectController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('/about','about');
Route::view('/services','service');

Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'store']);

Route::get('/profile',[ProfileController::class,'index']);
Route::patch('/profile',[ProfileController::class,'update']);
Route::delete('/profile/delete',[ProfileController::class,'destroy']);
Route::patch('/resetpassword',[PasswordController::class,'update']);


Route::get('/urls',[UrlController::class,'index']);
Route::get('/url/create',[UrlController::class,'create']);
Route::delete('/delete/{id}',[UrlController::class,'destroy']);
Route::post('/generateurl',[UrlController::class,'store']);



Route::middleware('guest')->group(function(){
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);
    Route::get('/register',[RegisteredController::class,'index']);
    Route::post('/register',[RegisteredController::class,'store']);

});

Route::delete('/logout',[SessionController::class,'destroy']);
Route::get('/{shortcode}', [UrlRedirectController::class, 'index']);


//reset password
//profieupdate
