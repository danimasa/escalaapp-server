<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Back extends Model
{
    //

    public function escalas(){
      return $this->belongsToMany('App\Escala');
    }
}
