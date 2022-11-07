<?php

use Illuminate\Support\Facades\Route;


Route::get('/atik', function () {
    
      return view('atik');
    
});
Route::get('/index',function(){
      return view('index');
});




