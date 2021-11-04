<?php

namespace App\Mail;

use App\Models\products;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct()
    {
       //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $id = session('productId');
        $product = Products::find($id);
        return $this->view('products.productMail')->with(['product'=>$product]);
    }
}
