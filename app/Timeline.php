<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $table = "timelines";

    public function event(){
      return $this->belongsTo('App\Event');
    }
}
