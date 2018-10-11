<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_info extends Model
{
  protected $fillable = [
      'rank_from', 'rank_to', 'order_id'
  ];


  public function order()
  {
    return $this->belongsTo('App\Order');
  }


  public function rankFrom()
  {
    return $this->belongsTo('App\League_rank', 'rank_from');
  }


  public function rankTo()
  {
    return $this->belongsTo('App\League_rank', 'rank_to');
  }

}
