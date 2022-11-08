<?php

use Illuminate\Support\Facades\Route;


Route::get('/atik', function () {
    
      return view('atik');
    
});
Route::get('/index',function(){
      return view('index');
});
Route::get('/home',function(){
      return view('home');
});
Route::get('/home/about', function(){
      return view('about');
});
Route::get('/home/contact',function(){
      return view('contact');
});



