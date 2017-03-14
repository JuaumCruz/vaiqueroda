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

Auth::routes();

Route::middleware('auth')->namespace('Web')->group(function () {
    Route::name('root')->get('/', 'HomeController@index');
    Route::name('home')->get('/home', 'HomeController@index');
    Route::resource('sale', 'SaleController');
    Route::resource('company', 'CompanyController');
    Route::resource('voucher', 'VoucherController');
    Route::resource('booking', 'BookingController');

    Route::post('pagseguro-buy', 'PagSeguroController@postBuy')->name('pagseguro.buy');
    Route::post('pagseguro-info', 'PagSeguroController@postInfo')->name('pagseguro.info');
    Route::get('pagseguro-redirect', 'PagSeguroController@getRedirect')->name('pagseguro.redirect');
    Route::post('pagseguro-notification', 'PagSeguroController@PostNotification')->name('pagseguro.notification');

    //Route::post('pagseguro-notification', [
    //    'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification',
    //    'as' => 'pagseguro.notification',
    //]);
});
