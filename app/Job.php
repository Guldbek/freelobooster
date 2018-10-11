<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $fillable = [
      'user_id', 'ticket', 'booster_id', 'order_id', 'status'
  ];

  public function order(){
    return $this->belongsTo('App\Order');
  }

}
