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

Route::get('/', 'ClientController@index');
Route::get('shop','ClientController@shop');
Route::get('cart','ClientController@cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
