<?php

namespace App\Http\Controllers;

use App\services\PayPalService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    // MATRIZ DE TRAZABILIDAD DE REQUISITOS:
    //https://docs.google.com/spreadsheets/d/1dJc2e5C2nm2MUsvmy3gHFZHLYUieNLE-spPpbuIZyN8/edit#gid=1570316564


    /*
     * ES-9	Yo como visitante quiero comprar un producto digital para apoyar a la casa Loohl
     */
    public function pay(Request $request){
        $rules = [
            'value' =>['required','numeric','min:5'],
            'currency'=>['required','exists:currencies,iso'],
            'payment_plataform'=>['required','exists:payment_plataforms,id']
        ];

        $request->validate($rules);
        session(['sendEmail' =>$request->email ]);
        session(['productId' =>$request->product_id ]);
        $paymentPlataform = resolve(PayPalService::class); //resolver la dependencia

        return $paymentPlataform->handlePayment($request);
    }

    public function approval(){
        $paymentPlataform = resolve(PayPalService::class);

        return $paymentPlataform->handleApproval();
    }

    public function cancelled(){
        //
    }
}
