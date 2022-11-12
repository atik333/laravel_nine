<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FirstController;


Route::get('/atik', function () {
    
      return view('atik');
    
});
Route::get('/index',function(){
      return view('index');
      
});
//Route::view('/home','home');

Route::get('/home', function(){
      return view('home');
});

Route::get(md5('/home/about'), function(){
      return view('about');

      //return redirect('home/contact');
})->name('/home/about');
Route::get(md5('/home/contact'),function(){
      return view('contact');
})->name('/home/contact');

//controller
//Route::get('home/controller', [FirstController::class, 'index'])->name('/home/controller');
//Route::get('controller', [FirstController::class, 'show']);


Route::get(md5('/home/controller'), 'App\Http\Controllers\FirstController@index')->name('/home/controller');

// Route::get('/home/controller', function(){
//       return view('controller');
// })->name('/home/controller');





Route::get('/new{roll}',function($roll){
      return $roll;
});


//Middleware

Route::get('/country', function(){
      return view('country');
})->middleware('country');



