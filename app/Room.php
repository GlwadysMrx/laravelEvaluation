<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  public function location ()
  {
    return $this->belongsTo('App\Location');
  }
  public function status ()
  {
    return $this->belongsTo('App\Status');
  }
}
