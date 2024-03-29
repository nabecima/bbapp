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

Route::get('/', 'TopController@index')->name('top');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tweet', 'TweetController@store')->name('tweet.store');
Route::delete('tweet/{id}', 'TweetController@destroy')->name('tweet.destroy');

Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::patch('/user/{id}', 'UserController@update')->name('user.update');
