<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id','name','age','program','runs','wickets'];

    public function playerteam(){
      return $this->hasMany('\App\PlayerTeam');
    }
}
