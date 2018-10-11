<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'user_id', 'ticket', 'price', 'status'
  ];


  public function info()
  {
    return $this->hasOne('App\Order_info');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function job()
  {
    return $this->hasOne('App\Job');
  }

  

}
