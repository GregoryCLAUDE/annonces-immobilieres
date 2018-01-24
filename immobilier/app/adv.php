<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adv extends Model
{
    protected $fillable = [
      'creation', 'exit'
    ];

    public function advertiser (){
      return $this->belongsTo('App\advertiser', 'adv_id' ,'advertisers_id');
    }

    public function housing() {
      return $this->belongsTo('App\housing', 'adv_id', 'housing_id');
    }

    public function message() {
      return $this->hasMany('App\message', 'adv_id', 'message_id');
    }

}
