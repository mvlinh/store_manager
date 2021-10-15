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
    return view('login');
});
Route::get('register', function () {
    return view('register');
})->name('register');
Route::get('login', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
})->name('home')->middleware('loginRole');
Route::post('login','App\Http\Controllers\UserController@login')->name('login');
Route::post('getInfo','App\Http\Controllers\UserController@register')->name('getInfo');
Route::get('logout','App\Http\Controllers\UserController@logout')->name('logout');
