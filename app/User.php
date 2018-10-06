<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function boosterJobs(){
      return $this->hasMany('App\Job', 'booster_id');
    }

    public function userJobs(){
      return $this->hasMany('App\Job', 'user_id');
    }

    public function orders(){
      return $this->hasMany('App\Order');
    }

    public function booster(){
      return $this->hasOne('App\Booster');
    }

    public function getUserRoleName(){
        switch ($this->role) {
          case 4:
            return 'Admin';
            break;

          case 3:
            return 'Booster';
            break;

          case 2:
            return 'Premium';
            break;

          case 1:
            return 'User';
            break;
        }
    }

    public function auctionEndDate()
    {
        return Carbon::createFromFormat('m/d/Y', $this->auction_end);
    }


}
