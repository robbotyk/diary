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

Route::get('/', 'InputController@index');
Route::get('/inputs/create', 'InputController@create');
Route::get('/inputs/{input}/edit', 'InputController@edit');
Route::put('/inputs/{input}', 'InputController@update');
Route::get('/inputs/{input}', 'InputController@show');
Route::post('/inputs', 'InputController@store');

