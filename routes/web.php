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

Route::get('management/product', 'ProductController@index');

Route::get('management/product/create', 'ProductController@create');

Route::post('management/product', 'ProductController@store');

Route::get('management/product/{id}', 'ProductController@show');

Route::get('management/product/{id}/edit', 'ProductController@edit');

Route::patch('management/product/{id}', 'ProductController@update');

Route::delete('management/product/{id}', 'ProductController@destroy');

Route::resource('management/user','UserController');
