<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
  public function match(){
    return $this->hasMany('App\Match');
  }
}
