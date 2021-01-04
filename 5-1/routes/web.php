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

Route::get('index', 'PostController@index')->middleware('auth');
Route::post('index', 'PostController@post')->middleware('auth');

Route::get('logout', 'PostController@logout');

Auth::routes();

