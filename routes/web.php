<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/create', function () {
    return view('login');
});

Auth::routes();
Route::get('/api',  function(){
    return view('vendor/passport/authorize');
}) ;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::post('/post', [App\Http\Controllers\PostsController::class, 'store'])->name('post');

//Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*');


Route::get('/profile/{id}',[App\Http\Controllers\ProfilesController::class,'index'])->name('profile');