<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booster_group extends Model
{
    public function rankTo() {
      return $this->hasOne('App/League_rank');
    }


    public function rankFrom() {
      return $this->hasOne('App/League_rank');
      
    }

}
