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
    return view('admin.dashboard');
});

Route::get('/admin/orders', function () {
    return view('admin.orders');
});

Route::get('/admin/klanten', function () {
    return view('admin.klanten');
});

Route::get('/admin/producten', function () {
    return view('admin.producten');
});

Route::get('/admin/instellingen', function () {
    return view('admin.instellingen');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/account', function () {
    return view('profile');
});

Route::get('/category/{id}', 'ProductController@filter');

Route::patch('users/{user}/update', ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::resource('users', 'UserController');

Route::get('admin/klanten', 'AdminUserController@index');

Route::get('admin/klanten/{id}', ['as' => 'admin.klanten_detail', 'uses' => 'AdminUserController@show']);

Route::resource('admin/orders', 'AdminOrderController');

Route::resource('admin/producten', 'AdminProductController');

Route::resource('admin/', 'AdminDashboardController');

Route::resource('products', 'ProductController');

Route::resource('reviews', 'ReviewController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('add-to-cart', 'ProductController@addToCart');

Route::get('cart', 'ProductController@cart');

Route::delete('remove-from-cart', 'ProductController@remove');