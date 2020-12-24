<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->group( function () {
    Route::resource('users', App\Http\Controllers\API\UserController::class);
});
  
Route::post('register', [App\Http\Controllers\API\RegisterController::class, 'register']);
Route::post('login', [App\Http\Controllers\API\RegisterController::class, 'login']);
 Route::delete( 'post/delete','App\Http\Controllers\API\PostsController@destroy' ) ;
     
Route::middleware('auth:api')->group( function () {
    Route::resource('post', App\Http\Controllers\API\PostsController::class);
   
});
Route::apiResources(['user'=>'App\Http\Controllers\API\UserController']) ;
Route::get( 'profile','App\Http\Controllers\API\RegisterController@authUser' ) ;
Route::apiResources(['post'=>'App\Http\Controllers\API\PostsController']) ;
Route::get( 'post/{id}','App\Http\Controllers\API\PostsController@post' ) ;
Route::get( 'user/{id}','App\Http\Controllers\API\PostsController@show' ) ;

Route::get( 'authUser','App\Http\Controllers\API\PostsController@authUser' ) ;