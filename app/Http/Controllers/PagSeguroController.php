<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use laravel\pagseguro\Platform\Laravel5\PagSeguro;

class PagSeguroController extends Controller
{

    public function postBuy(Request $request)
    {
        $user = Auth::user();

        $voucher = Voucher::whereCode($request->get('code'))->get()->first();
        //$pathCurrent = $request->header()['referer'][0];
        $data = [
            'items' => [
                [
                    'id' => $voucher->id,
                    'description' => $voucher->sale->name,
                    'quantity' => '1',
                    'amount' => $voucher->sale->value,
                    'weight' => '0',
                    'shippingCost' => '0',
                    'width' => '0',
                    'height' => '0',
                    'length' => '0',
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
                'cost' => 0,
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
                'phone' => $user->phone_number,
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

    public function getInfo(Request $request)
    {
        //$code = 'A2401CD721924F01B82DE51AB3567F23';
        $transactionCode = preg_replace('/-/', '', $request->input('transactionCode'));
        $credentials = PagSeguro::credentials()->get();
        $transaction = PagSeguro::transaction()->get($transactionCode, $credentials);
        $information = $transaction->getInformation();
        $status = $information->getStatus()->getName();
        return $status;
    }

    public function getRedirect(Request $request)
    {

    }

    public function postNotification(Request $request)
    {


        //$teste = "39A8FBED0FB24885A102199D40DBF67C";
        //39A8FBED-0FB2-4885-A102-199D40DBF67C

        //$transactionCode = preg_replace('/-/', '', $request->input('transactionCode'));

        //        $credentials = PagSeguro::credentials()->get();
        //        $transaction = PagSeguro::transaction()->get($transactionCode, $credentials);
        //        $information = $transaction->getInformation();
        //        dd($information);
        //        return $information;
    }
}
