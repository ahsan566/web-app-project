<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function tournament(){
      return $this->belongsTo('App\Tournament');
    }

    public function venue(){
      return $this->belongsTo('App\Venue');
    }

    public function team1(){
      return $this->belongsTo('App\Team', 'team_1_id');
    }

    //relationship for team 2
    public function team2(){
      return $this->belongsTo('App\Team', 'team_2_id');
    }
}
