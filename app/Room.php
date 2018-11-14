<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  public function location ()
  {
    return $this->belongsToMany('App\Location');
  }
  public function status ()
  {
    return $this->belongsToMany('App\Status');
  }
}
