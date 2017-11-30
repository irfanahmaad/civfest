<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = ['title', 'sub_title', 'description', 'images', 'link_register', 'link_tor'];

    public function timelines(){
      return $this->hasMany('App\Timeline');
    }
}
