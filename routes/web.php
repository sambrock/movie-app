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

Route::get('/', 'AppController@test');
Route::get('search/{searchTerm}', 'AppController@search');
Route::post('log', 'AppController@log');
Route::get('seen', 'AppController@seen');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
