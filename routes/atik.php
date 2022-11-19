<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\FirstController;
use App\Http\Controllers\InvokeController;
use App\Http\Controllers\oneController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

Route::get('/atik', function () {
    
      return view('atik');
    
})->middleware('auth');
Route::get('/index',function(){
      return view('index');
      
});
//Route::view('/home','home');

Route::get('/home', function(){
      return view('home');
})->name('/home');

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




//invoke
Route::get('/invoke', InvokeController::class);

//Controller Middleware
Route::get('/country', 'App\Http\Controllers\FirstController@country')->middleware('country');


//@csrf
Route::post('/input', 'App\Http\Controllers\FirstController@inputStudent')->name('inputdata');


//view

// Route::get('/laravel',function(){
//       return view('page.laravel');
// });
Route::get('/laravel','App\Http\Controllers\FirstController@laravel')->name('/home/laravel');



// login photo route //
Route::get('/photo', 'App\Http\Controllers\FirstController@photo')->name('photo')->middleware('verified');

//student id Encrypter

Route::get('/student/{id}', 'App\Http\Controllers\FirstController@studentid')->name('student');


//hash


Route::post('/password/hash', 'App\Http\Controllers\FirstController@hash')->name('hash');





Route::get('/text', 'App\Http\Controllers\oneController@text');



//form


//Route::post('/form', 'App\Http\Controllers\FirstController@FormData')->name('fdata');

// Route::get('/form', function () {
    
//       return view('page.from');
    
// });


//Middleware
// Route::get('/country', function(){
//       return view('country');
// })->middleware('country');


Route::get('/new{roll}',function($roll){
      return $roll;
});




Route::get('/log', function(){
      // Log::info('this is your age :' .rand(10,30));
      // return redirect()->to('/home');
});
Route::get('/logfile', function(){
      $logfile = file(storage_path().'/logs/mylog.log');
      $collection = [];
      foreach($logfile as $line_number => $line){
            $collection[]= array('line' => $line_number, 'mylog' =>htmlspecialchars($line));
      }
      dd($collection);
});

