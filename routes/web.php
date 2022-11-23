<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Facade;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/first', function(){
    app()->make('first_service');
});

Route::get('/facade', function(){
    'myfacade'::text();
});


Route::get('/atik', function(){
    echo "atik";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cache', function () {
    echo Cache::get('key');
     Cache::put('hello', 'wold');
     dd(cache()->get('hello'));
     
 });
require __DIR__.'/auth.php';



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//class//
Route::get('/class', [App\Http\Controllers\admin\ClassController::class, 'index'])->name('class.index');
