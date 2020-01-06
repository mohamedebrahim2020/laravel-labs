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
Route:: group (['middleware'=>"auth"],function(){
     Route::get('/','PostController@index')->name('posts.home'); 
Route::get('/posts','PostController@index')->name('posts.index');

Route::get('posts/create','PostController@create')->name('posts.create');

Route::post('posts/store','PostController@store')->name('posts.store');

Route::get('posts/edit/{post}','PostController@edit')->name('posts.edit');
Route::put('posts/update/{post}','PostController@update')->name('posts.update');

Route::get('posts/{post}','PostController@show')->name('posts.show');

Route::delete('delete/{post}','PostController@destroy');
});

// {post}  -> {}-> dynamic variable




Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/google', 'Auth\LoginController@redirectToProvider1');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback1');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

