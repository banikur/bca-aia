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

Route::get('/test', function () {
    return view('welcome2');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comming-soon', function () {
    return view('commingsoon');
});

Route::get('/avatar', function () {
    return view('animasi.avatar');
});
Route::get('/mini-games', function () {
    return view('games.games');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PostController@index')->name('data_gambar');
Route::get('/review', 'FeedbackController@index');
Route::post('/reviewPost', 'FeedbackController@store')->name('reviewpost');
Route::post('/posts', 'PostController@gambar')->name('posts.gambar');
