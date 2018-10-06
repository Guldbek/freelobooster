<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booster extends Model
{
  protected $guarded = [];


   public function user(){
     return $this->belongsTo('App\User');
   }

   public function boosterGroup(){
     return $this->belongsTo('App\Booster_group');
   }

   public function jobs(){
     return $this->hasMany('App\Job');
   }


   public function getSumOfPercentage() {
    $boosterGroupPercentage = $this->boosterGroup->payment_percentage;
    $userPercentage = $this->payment_discount;
    return $boosterGroupPercentage + $userPercentage;
   }

}
