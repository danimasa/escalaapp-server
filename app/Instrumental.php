<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumental extends Model
{
    //
    protected $table = "instrumentals";

    public function escalas(){
      return $this->belongsToMany('App\Escala');
    }
}
