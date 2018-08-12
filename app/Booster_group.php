<?php

namespace App;


use App\League_rank;
use Illuminate\Database\Eloquent\Model;

class Booster_group extends Model
{
    public function rankTo() {
      return $this->belongsTo('App\League_rank', 'rank_to');
    }


    public function rankFrom() {
      return $this->belongsTo('App\League_rank', 'rank_from');
    }

}
