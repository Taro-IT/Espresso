<?php

namespace Database\Seeders;

use App\Models\PaymentPlataform;
use Illuminate\Database\Seeder;

class PaymentPlataformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlataform::create([
            'name'=>'PayPal',
            'image'=>'images/payment-plataforms/paypal.jpg'
        ]);
    }
}
