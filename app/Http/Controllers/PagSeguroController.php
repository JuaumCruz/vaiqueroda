<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagSeguroController extends Controller
{

    public function postBuy(Request $request)
    {
        //itens[] = vaucher
        $data = [
            'items' => [
                [
                    'id' => '18',
                    'description' => 'Item Um',
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
                //'phone' => '11985445522',
                'bornDate' => '1988-03-21',
            ]
        ];

        $checkout = PagSeguro::checkout()->createFromArray($data);
        $credentials = PagSeguro::credentials()->get();
        $information = $checkout->send($credentials);
        /*if ($information) {
            print_r($information->getCode());
            print_r($information->getDate());
            print_r($information->getLink());
        }*/

        $link = $information->getLink();
        $code = $information->getCode();

        //$transaction = PagSeguro::transaction()->get($code, $credentials);

        return view('welcome', compact('link','code'));
        //return redirect()->route('pagseguro.redirect');

        return "Compra";
    }

    public function getInfo()
    {
        return "Dados da transação";
    }

    public function getRedirect()
    {
        return "Simples redirecionamento";
    }

    public function postNotification(Request $request)
    {
        return "Notificação";
    }
}
