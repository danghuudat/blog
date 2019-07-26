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
Route::get('getData','AdminController@index');
Route::post('store','AdminController@store');
Route::post('delete','AdminController@destroy');
Route::post('show','AdminController@show');
Route::post('update','AdminController@update');
Route::post('import','AdminController@import');
