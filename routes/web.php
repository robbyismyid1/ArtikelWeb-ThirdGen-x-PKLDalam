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

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontController@index')->name('index');
    Route::get('/faq', function () {
        return view('front.faq');
    });
    Route::get('/detail', function () {
        return view('front.details1');
    });
    Route::get('/catalog', function () {
        return view('front.catalog2');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/tag', 'TagController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/artikel', 'ArtikelController');
});
