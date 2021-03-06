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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('', 'ItemController@index');
Route::get('/add', 'ItemController@add');
Route::post('/add', 'ItemController@create');

Route::get('/view/{id?}', 'ItemController@view');

