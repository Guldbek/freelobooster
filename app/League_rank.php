<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League_rank extends Model
{

  public function boosterGroup(){
    return $this->hasMany('App\Booster_group');
  }



  public function createLeagueRanks() {
    $firstBatch = [
      'Bronze',
      'Silver',
      'Gold',
      'Platinum',
      'Diamond',
    ];
    foreach($firstBatch as $rank){
      $price = 5;
      for($i = 1; $i < 6;$i++) {
        $league_rank = new League_rank;

        $league_rank->rank = $rank." ".$i;
        $league_rank->price = $price;
        $league_rank->save();


      }
      $price = $price + 5;

      $i = 0;
    }
  }



}
