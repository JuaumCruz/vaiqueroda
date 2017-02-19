<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use laravel\pagseguro\Platform\Laravel5\PagSeguro;

class PagSeguroController extends Controller
{

    public function postBuy(Request $request)
    {
        $user = Auth::user();
       return $user->toArray();
        //$pathCurrent = $request->header()['referer'][0];
        $data = [
            'items' => [
                [
                    'id' => '18',
                    'description' => 'Item Um',
                    'quantity' => '1',
                    'amount' => '1.15',
                    'weight' => '45',
                    'shippingCost' => '3.5',
                    'width' => '50',
                    'height' => '45',
                    'length' => '60',
                ],
                [
                    'id' => '19',
                    'description' => 'Item Dois',
                    'quantity' => '1',
                    'amount' => '3.15',
                    'weight' => '50',
                    'shippingCost' => '8.5',
                    'width' => '40',
                    'height' => '50',
                    'length' => '80',
                ],
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
        $link = $information->getLink();
        $code = $information->getCode();

        return $code;

        //return redirect()->route('pagseguro.redirect')->with(['path'=> $pathCurrent, 'data'=> $data]);
    }

    public function getInfo()
    {
        return "Dados da transação";
    }

    public function getRedirect(Request $request)
    {

    }

    public function postNotification(Request $request)
    {
        return "Notificação";
    }
}
