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
Route::get('/accum', function () {
    return view('accum');
})->name('accum');
Route::get('/tyres', function () {
    return view('tyres');
})->name('tyres');
Route::get('/rims', function () {
    return view('rims');
})->name('rims');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
