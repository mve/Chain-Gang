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

Route::get('/category', function () {
    return view('category');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/account', function () {
    return view('profile');
});

//Route::get('/cart', function () {
//    return view('cart')->name('cart');
//});

Route::resource('users', 'UserController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
