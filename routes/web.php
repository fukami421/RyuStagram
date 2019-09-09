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

# テスト
Route::get('hello/{id}', function ($id) {
    return $id;
});

# Post
Route::get('/posts', 'PostController@index');
Route::get('/posts/add', 'PostController@add');
Route::post('/posts/add', 'PostController@create');

# User
Route::get('/users', 'UserController@index');
Route::get('/mypage', 'UserController@show_mypage');
