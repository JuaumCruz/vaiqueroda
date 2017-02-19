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

        //$voucher = $request->all();
        //$pathCurrent = $request->header()['referer'][0];
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
                ],
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
                'email' => $user->email,
                'name' => $user->name ,
                'documents' => [
                    [
                        'number' => $user->cpf,
                        'type' => 'CPF'
                    ]
                ],
                //'phone' => '990077665',
                'bornDate' => $user->birth_date,
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
