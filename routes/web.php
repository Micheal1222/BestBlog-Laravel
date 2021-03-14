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
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services' );


Route::get('/posts', 'App\Http\Controllers\PostsController@index')->name('posts.index');
Route::get('posts/create', 'App\Http\Controllers\PostsController@create')->name('posts.create');

Route::post('/posts', 'App\Http\Controllers\PostsController@store')->name('posts.store');





Route::get('/posts/{id}', 'App\Http\Controllers\PostsController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'App\Http\Controllers\PostsController@update')->name('posts.update');
Route::delete('/posts/{id}', 'App\Http\Controllers\PostsController@destroy')->name('posts.destroy');