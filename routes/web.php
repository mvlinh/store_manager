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

Route::post('home','App\Http\Controllers\UserController@login')->name('login');
Route::post('getInfo','App\Http\Controllers\UserController@register')->name('getInfo');
Route::get('logout','App\Http\Controllers\UserController@logout')->name('logout');

//addcustomer
Route::get('add-customer','App\Http\Controllers\CustomerController@add')->name('add-customer');
Route::get('customers', 'App\Http\Controllers\CustomerController@index')->name('customers');
Route::get('customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::post('customers/store', 'App\Http\Controllers\CustomerController@store')->name('customers.store');
// show data customer

Route::get('manager_customer','App\Http\Controllers\CustomerController@show_customer')->name('manager_customer');
Route::post('addCustomer','App\Http\Controllers\CustomerController@addCustomer')->name('addCustomer');
Route::get('addCustomer','App\Http\Controllers\CustomerController@addCustomer')->name('addCustomer');