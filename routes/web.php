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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company', 'CompanyController');
Route::resource('sale', 'SaleController');
Route::resource('voucher', 'VoucherController');
Route::resource('booking', 'BookingController');
Route::resource('company', 'CompanyController');



Route::post('pagseuro-buy',function(){})->name('pagseguro.buy');
Route::get('pagseuro-info',function(){})->name('pagseguro.info');
Route::get('pagseguro-redirect',function (){})->name('pagseguro.redirect');
Route::post('pagseguro-notification',function (){})->name('pagseguro.notification');