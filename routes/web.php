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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/', ['as' => 'posts.index','uses' => 'PostsController@index']);
Route::get('/create', ['as' => 'posts.create','uses' => 'PostsController@create']);
Route::post('/', ['as' => 'posts.store','uses' => 'PostsController@store']);
Route::get('/{id}/', ['as' => 'posts.show','uses' => 'PostsController@show']);
Route::get('/{id}/my-posts', ['as' => 'posts.myposts','uses' => 'PostsController@myPosts']);
Route::get('/{id}/edit', ['as' => 'posts.edit','uses' => 'PostsController@edit']);
Route::post('/{id}', ['as' => 'posts.update','uses' => 'PostsController@update']);
Route::get('/{id}/delete', ['as' => 'posts.destroy','uses' => 'PostsController@destroy']);
