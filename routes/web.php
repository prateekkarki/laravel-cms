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


Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/feed', 'PostFeedController@index')->name('posts.feed');
Route::resource('posts', 'PostController')->only('show');
Route::resource('users', 'UserController')->only('show');
Route::get('/home', 'HomeController@index')->name('home');
