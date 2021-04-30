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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profiles.show');
Route::get('/profiles/{user}/edit', 'ProfileController@edit')->name('profiles.edit');
Route::post('/profils/{user}/update', 'ProfileController@update')->name('profiles.update');


Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::Post('/posts/store', 'PostController@store')->name('posts.store');

Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
