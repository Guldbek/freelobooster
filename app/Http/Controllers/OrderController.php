<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_info;
use App\League_rank;
use Illuminate\Http\Request;
use App\Services\PayPalService;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $user_id = 5;

      $request->validate([
        'rank_from' => 'required',
        'rank_to' => 'required'
      ]);

      // CALCULATE PRICE
      $rankFrom = $request->get('rank_from');
      $rankTo = $request->get('rank_to');

      $between = [$rankFrom, $rankTo];

      $ranks = League_rank::whereBetween('id', $between)->get();

      $price = 0;
      foreach($ranks as $rank):
        $price = $price + $rank->price;
      endforeach;

      // CREATE PAYPAL PAYMENT
      $service = new PayPalService();
      $paymentObj = $service->createOrder($price);
      $checkoutLink = $paymentObj->links[1]->href;


      // SAVE THE ORDER
      $order = [
        'user_id' => $user_id,
        'price' => $price,
        'status' => $paymentObj->state,
        'ticket' => $paymentObj->id
      ];

      $orderClass = new Order;
      $orderClass = $orderClass->create($order);

      $orderInfo = new Order_info;
      $orderInfo->create([
        'order_id' => $orderClass->id,
        'rank_from' => $request->get('rank_from'),
        'rank_to' => $request->get('rank_to'),
      ]);

      return $checkoutLink;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
