<?php

namespace App\Http\Controllers;

use Session;
use App\Services\PayPalService;
use Illuminate\Http\Request;

use App\Order;
use App\Job;



class PaypalController extends Controller
{


  public function succesProcess(Request $request, PayPalService $service)
  {
    // Check paypal if the payment is arrived
    $paymentObj = $service->succesProcess($request);
    $order = Order::where('ticket', '=', $request->get('paymentId'))->with('user')->first();

    // Order save;
    $order->status = $paymentObj->state;
    $order->save();


    // Create an open Job
    $job = new Job;
    $job->create([
      'ticket' => 'T357',
      'order_id' => $order->id,
      'user_id' => $order->user->id,
      'status' => 'open',
      'booster_id' => 0
    ]);

    return 'Payment success';


  }

  public function listPayments(PayPalService $service){
    $payments = $service->listPayments();
    return $payments;
  }

}
