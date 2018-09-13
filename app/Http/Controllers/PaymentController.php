<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class PaymentController extends Controller
{
      public function paypalcheckout(){
        $data = [];
$data['items'] = [
    [
        'name' => 'Product 1',
        'price' => 9.99,
        'qty' => 1
    ],
    [
        'name' => 'Product 2',
        'price' => 4.99,
        'qty' => 2
    ]
];

$data['invoice_id'] = 1;
$data['invoice_description'] = "Order #$data[invoice_id] Invoice";
$data['return_url'] = url('/payment/success');
$data['cancel_url'] = url('/cart');

$total = 0;
foreach($data['items'] as $item) {
    $total += $item['price'];
}

$data['total'] = $total;


      }

}
