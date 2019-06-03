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

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/product', function () {
    return view('product');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
