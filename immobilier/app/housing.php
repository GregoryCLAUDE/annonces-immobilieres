<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class housing extends Model
{
  protected $fillable = [
    'number', 'street', 'building', 'flat', 'zipcode', 'city', 'area', 'type', 'furnished','price', 'access', 'room',
    'floor', 'vehicle', 'bedroom', 'description', 'greenhouseGaz', 'energeticClass'
  ];

  public function adv(){
    return $this->('App\adv', 'housing_id', 'adv_id');
  }
}
