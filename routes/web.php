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

Route::resource('/posts', 'PostController');

Route::get('/posts/create', 'PostController@input');
Route::post('/posts/create','PostController@store');

Route::get('/posts', 'PostController@index');

Route::get('/posts/{id}/edit','PostController@edit');
Route::put('/posts/update/{id}','PostController@update');


Route::post('/posts/{id}/delete','PostController@delete');












 