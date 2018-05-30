<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  public function match(){
    return $this->belongsTo('App\Match');
  }

  public function playerteam(){
    return $this->hasMany('App\PlayerTeam');
  }

}
