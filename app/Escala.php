<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escala extends Model
{
    //

    public function instrumentais(){
      return $this->belongsToMany('App\Instrumental');
    }

    public function musicas(){
      return $this->belongsToMany('App\Music');
    }

    public function backs(){
      return $this->belongsToMany('App\Back');
    }
}
