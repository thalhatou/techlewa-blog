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
//about us route
Route::get('/about', function () {
    return view('about');
});
//all blog post route
Route::get('/blog', 'App\Http\Controllers\PostsController@index');

//base route
Route::get('/', 'App\Http\Controllers\PostsController@index');

//single blogpost route
Route::get('post/{slug}', 'App\Http\Controllers\PostsController@single');
