<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = [
      'authorName', 'authorLastname', 'authorEmail', 'message'
    ];

    public function adv(){
      return $this->hasMany('App\adv', 'message_id', 'adv_id');
    }
}
