<?php

namespace App\Services;

use Session;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;


class PayPalService
{


  protected $apiContext;

  public function __construct() {
    $apiContext = new \PayPal\Rest\ApiContext(
      new \PayPal\Auth\OAuthTokenCredential(
        config('paypal.client_id'),
        config('paypal.secret')
      )
    );

    $this->apiContext = $apiContext;
  }

  public function createOrder($price) {
    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    // ### Itemized information
    $item1 = new Item();
    $item1->setName('Boosting service')
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setPrice($price);
    $itemList = new ItemList();
    $itemList->setItems(array($item1));



    // ### Amount
    $amount = new Amount();
    $amount->setCurrency("USD")
        ->setTotal($price);

    // ### Transaction
    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription("Payment description")
        ->setInvoiceNumber(uniqid());

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl('http://freeloboost.test/payment/success/process')
      ->setCancelUrl('http://freeloboost.test/payment/cancel/process');


    $payment = new Payment();
    $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));

      try {
        $payment->create($this->apiContext);
        // Redirect the customer to $approvalUrl
      } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
      } catch (Exception $ex) {
        die($ex);
      }

      return $payment;

  }


  public function succesProcess(Request $request)
  {

    // Get the payment Object by passing paymentId
    $paymentId = $request->get('paymentId');
    $payment = Payment::get($paymentId, $this->apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($request->get('PayerID'));

    try {
        $result = $payment->execute($execution, $this->apiContext);
        try {
            $payment = Payment::get($paymentId, $this->apiContext);
        } catch (Exception $ex) {
            exit(1);
        }
    } catch (Exception $ex) {

        exit(1);
    }
    return $payment;
  }

  public function listPayments(){
    try {
        $params = array('count' => 10, 'start_index' => 0);
        $payments = Payment::all($params, $this->apiContext);
    } catch (Exception $ex) {
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        ResultPrinter::printError("List Payments", "Payment", null, $params, $ex);
        exit(1);
    }

    return $payments;
  }

}
