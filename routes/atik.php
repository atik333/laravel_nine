<?php

use Illuminate\Support\Facades\Route;


Route::get('/atik', function () {
    
      return view('atik');
    
});
Route::get('/index',function(){
      return view('index');
      
});
Route::view('/home','home');

Route::get(md5('/home/about'), function(){
      return view('about');

      //return redirect('home/contact');
})->name('/home/about');
Route::get(md5('/home/contact'),function(){
      return view('contact');
})->name('/home/contact');

Route::get('/new{roll}',function($roll){
      return $roll;
});


//Middleware

Route::get('/country', function(){
      return view('country');
})->middleware('country');



