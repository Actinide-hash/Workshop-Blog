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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "hello";
});

Route::get('/test/{test_id}', function ($id) {
    return "hello, your id is " . $id;
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

/*
Route::get('/posts', function () {
    return view('posts');
});
*/

// Reading Content for Posts
Route::get('/posts', 'App\Http\Controllers\PostsController@index');
Route::get('/posts/{id}', 'App\Http\Controllers\PostsController@show');

// Creating Content for Posts
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/store', 'PostsController@store');


Route::get('/posts/{post_id}', function ($id) {
    return view('show');
});