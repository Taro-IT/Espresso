<?php

namespace App\Services;

use App\Mail\ProductMail;
use App\Models\User;
use App\Traits\ConsumesExternalServices;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class PayPalService
{
    use ConsumesExternalServices;

    protected $baseUri;
    protected $clientId;
    protected $clientSecret;


    public function __construct()
    {

        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');

    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {

        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {


        $order = json_decode($this->createOrder($request->value, $request->currency));

        $orderLinks = collect($order->links);
        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);

        return redirect($approve->href);
    }

    public function handleApproval()
    {
        if (session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');
            $payment = $this->capturePayment($approvalId);
            $mail = session('sendEmail');
            $product = session('productId');
            Mail::to($mail)->send(new ProductMail($product));
            return redirect('/hacer-una-donacion')->with('status', 'Muchas Gracias por tu donación');
        }
        return redirect('/hacer-una-donacion')->withErrors('No pudimos capturar tu donación :c');
    }

    public function createOrder($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper($currency),
                            'value' => $value,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('donation.approval'),
                    'cancel_url' => route('donation.cancelled'),
                ]
            ],
            [],
            true,
        );
    }

    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [
                'Content-Type' => 'application/json',
            ],

        );
    }

}
