<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/feed', 'PostsController@index');
    Route::post('/feed', 'PostsController@store');
    Route::post('/feed/{post}', 'PostsController@store');
    Route::get('/feed/{post}', 'PostsController@show');
    Route::delete('/feed/{post}', 'PostsController@destroy');
});

