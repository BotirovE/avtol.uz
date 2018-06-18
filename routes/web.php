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
    return view('index');
})->name('index');

Route::get('/carpet', function () {
    return view('carpet');
})->name('carpet');
// Route::get('/accum', function () {
//     return view('accum');
// })->name('accum');
Route::get('/tyres', function () {
    return view('tyres');
})->name('tyres');
Route::get('/rims', function () {
    return view('rims');
})->name('rims');

Route::get('/product', function () {
    return view('individual');
})->name('product');

Route::get('/basket', function () {
    return view('basket');
})->name('basket');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'AdminController')->name('dashboard');
    Route::resource('accums', 'AccumulatorController')->only([
    'store', 'update', 'destroy'
    ]);
    Route::resource('mats', 'MatController')->only([
    'store', 'update', 'destroy'
    ]);
    Route::resource('tyres', 'TyreController')->only([
    'store', 'update', 'destroy'
    ]);
    Route::resource('wheels', 'WheelController')->only([
    'store', 'update', 'destroy'
    ]);
    Route::resource('brands', 'BrandController')->only([
    'store', 'update', 'destroy'
    ]);
});

Route::get('/accums', 'PagesController@accums')->name('accums');

