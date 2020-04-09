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



Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('admin')
->namespace('Admin')
->middleware('auth', 'admin')
->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('user', 'UserController');
    Route::resource('pelanggan', 'PelangganController');
});


