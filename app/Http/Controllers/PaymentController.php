<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
