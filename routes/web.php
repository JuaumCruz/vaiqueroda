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



Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company', 'CompanyController');
Route::resource('sale', 'SaleController');
Route::resource('voucher', 'VoucherController');
Route::resource('booking', 'BookingController');
Route::resource('company', 'CompanyController');

Route::get('teste', function(){
    $data = [
        'items' => [
            [
                'id' => '18',
                'description' => 'Voucher 1',
                'quantity' => '1',
                'amount' => '5.99',
                'weight' => '45',
                'shippingCost' => '3.5',
                'width' => '50',
                'height' => '45',
                'length' => '60',
            ]
        ],
        'shipping' => [
            'address' => [
                'postalCode' => '06410030',
                'street' => 'Rua Leonardo Arruda',
                'number' => '12',
                'district' => 'Jardim dos Camargos',
                'city' => 'Barueri',
                'state' => 'SP',
                'country' => 'BRA',
            ],
            'type' => 2,
            'cost' => 30.4,
        ],
        'sender' => [
            'email' => 'sender@gmail.com',
            'name' => 'Isaque de Souza Barbosa',
            'documents' => [
                [
                    'number' => '01234567890',
                    'type' => 'CPF'
                ]
            ],
            'phone' => '11985445522',
            'bornDate' => '1988-03-21',
        ]
    ];

    $checkout = PagSeguro::checkout()->createFromArray($data);
    $credentials = PagSeguro::credentials()->get();
    $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
    /*if ($information) {
        print_r($information->getCode());
        print_r($information->getDate());
        print_r($information->getLink());
    }*/

    $link = $information->getLink();
    $code = $information->getCode();

    return "nao deu";
});

Route::post('pagseguro-buy','PagSeguroController@postBuy')->name('pagseguro.buy');
Route::post('pagseguro-info','PagSeguroController@getInfo')->name('pagseguro.info');
Route::get('pagseguro-redirect','PagSeguroController@getRedirect')->name('pagseguro.redirect');

Route::post('pagseguro-notification','PagSeguroController@PostNotification')->name('pagseguro.notification');

//Route::post('pagseguro-notification', [
//    'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification',
//    'as' => 'pagseguro.notification',
//]);