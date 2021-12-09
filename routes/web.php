<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->middleware('logged');
Route::get('register', function () {
    return view('register');
})->name('register');
Route::get('login', function () {
    return view('login');
})->name('login')->middleware('logged');
Route::post('login','App\Http\Controllers\UserController@login');
Route::post('getInfo','App\Http\Controllers\UserController@register')->name('getInfo');
Route::get('logout','App\Http\Controllers\UserController@logout')->name('logout');
Route::middleware(['loginRole'])->group(function () {
    Route::prefix('/')->group(function () {
        Route::get('home', function () {
            return view('home');
        })->name('home');
        Route::get('dashboard','App\Http\Controllers\employeeController@dashboard')->name('dashboard');
        //addcustomer
        Route::get('add-customer','App\Http\Controllers\CustomerController@add')->name('add-customer');
        Route::get('customers', 'App\Http\Controllers\CustomerController@index')->name('customers');
        Route::get('customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
        Route::post('customers/store', 'App\Http\Controllers\CustomerController@store')->name('customers.store');
        // show data customer

        Route::get('manager_customer','App\Http\Controllers\CustomerController@show_customer')->name('manager_customer');
        Route::post('addCustomer','App\Http\Controllers\CustomerController@addCustomer')->name('addCustomer');
        Route::get('addCustomer','App\Http\Controllers\CustomerController@addCustomer')->name('addCustomer');
        Route::post('getDataCustomer','App\Http\Controllers\CustomerController@getDataCustomer')->name('getDataCustomer');
        Route::get('getDataCustomer','App\Http\Controllers\CustomerController@getDataCustomer')->name('getDataCustomer');
        // customer detail

        Route::get('customer_detail/{id}','App\Http\Controllers\CustomerDetailController@customer_detail')->name('customer_detail');

        Route::get('customer__detail','App\Http\Controllers\CustomerDetailController@customer__detail')->name('customer__detail');
        Route::get('add_product_care/{cus_id}/{pro_id}','App\Http\Controllers\CustomerDetailController@add_product_care')->name('add_product_care');
        Route::get('del_product_care/{cus_id}/{pro_id}','App\Http\Controllers\CustomerDetailController@del_product_care')->name('del_product_care');


        Route::get('show_info_care/{id}','App\Http\Controllers\CustomerDetailController@show_info_care')->name('show_info_care');

        Route::post('add_info_follow','App\Http\Controllers\CustomerDetailController@add_info_follow')->name('add_info_follow');
        // invoice

        Route::get('invoice','App\Http\Controllers\invoiceController@invoice')->name('invoice');


        Route::get('create_order','App\Http\Controllers\invoiceController@create_order')->name('create_order');
        Route::post('create_order','App\Http\Controllers\invoiceController@create_order')->name('create_order');

        Route::get('self_profile','App\Http\Controllers\employeeController@show')->name('self_profile');
        Route::post('self_profile','App\Http\Controllers\employeeController@show')->name('self_profile');


        Route::get('check_payroll','App\Http\Controllers\employeeController@check_payroll')->name('check_payroll');
        Route::post('check_payroll','App\Http\Controllers\employeeController@check_payroll')->name('check_payroll');


        Route::get('transfer_customer_show','App\Http\Controllers\customerController@transfer_customer')->name('transfer_customer_show');
        Route::post('transfer_customer_show','App\Http\Controllers\customerController@transfer_customer')->name('transfer_customer_show');

        Route::get('transfer_customer/{id}','App\Http\Controllers\customerController@transfer_customer_id')->name('transfer_customer');

        Route::get('transfer_customer_toEmployee/{id}/{employee_id}','App\Http\Controllers\customerController@transfer_customer_toEmployee')->name('transfer_customer_toEmployee');

        Route::get('transfer_customer_receive','App\Http\Controllers\customerController@receive_customer')->name('transfer_customer_receive');
        Route::post('transfer_customer_receive','App\Http\Controllers\customerController@receive_customer')->name('transfer_customer_receive');

        Route::get('agree_customer/{id}','App\Http\Controllers\customerController@agree')->name('agree_customer');
        Route::get('refuse_customer/{id}','App\Http\Controllers\customerController@refuse')->name('refuse_customer');

    });
});

// admin
// Route::middleware(['loginRole'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard','App\Http\Controllers\admin\managerController@dashboard')->name('admindashboard');
        Route::get('addemployee','App\Http\Controllers\admin\managerController@addemployee')->name('addemployee');
        Route::get('customertransferhistory','App\Http\Controllers\admin\managerController@customertransferhistory')->name('customertransferhistory');
        Route::get('showemployee','App\Http\Controllers\admin\managerController@showemployee')->name('showemployee');
        Route::post('lockemployee','App\Http\Controllers\admin\managerController@lockemployee')->name('lockemployee');
    });
// });