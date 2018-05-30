<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function match(){
      return $this->hasMany('App\Match');
    }
}
