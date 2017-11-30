<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $table = "seminars";

    public function speakers(){
      return $this->hasMany('App\Speaker');
    }
}
