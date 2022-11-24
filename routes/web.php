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
Route::get('/adddata/class', [App\Http\Controllers\Admin\ClassController::class, 'addclass'])->name('addclass.index');
Route::post('/adddat', [App\Http\Controllers\Admin\ClassController::class, 'classStore'])->name('classdata.store');
//__delete__//
Route::get('/delete/{id}', [App\Http\Controllers\Admin\ClassController::class, 'deleteClass'])->name('delete.class');
//edit
Route::get('/edit/{id}', [App\Http\Controllers\Admin\ClassController::class, 'editdata'])->name('edit.class');
Route::post('/edit/store/{id}', [App\Http\Controllers\Admin\ClassController::class, 'editstore'])->name('edit.store');



