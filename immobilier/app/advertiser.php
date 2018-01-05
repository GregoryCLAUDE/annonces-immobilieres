<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertiser extends Model
{
    protected $fillable=[
      'name', 'lastname', 'email'
    ];

    public function adv(){
      return $this->hasMany('App\adv', 'advertiser_id', 'adv_id')
    };

}
