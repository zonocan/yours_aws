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

//投稿詳細画面
Route::group(['prefix' => 'admin'], function() {
    Route::get('reviews/create_review_detail', 'Admin\ReviewsController@add');
});

//投稿画像画面
Route::group(['prefix' => 'admin'], function() {
    Route::get('reviews/create_review_files', 'Admin\ReviewsFilesController@add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
