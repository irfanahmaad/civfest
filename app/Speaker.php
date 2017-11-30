<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = "speakers";

    public function seminar(){
      return $this->belongsTo('App\Seminar');
    }
}
