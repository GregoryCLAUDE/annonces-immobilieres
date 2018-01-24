<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $fillable = ['name', 'id_housing'];

    public function housing(){
      return $this->('App/housing', 'images_id', 'housing_id' );
    }
}
