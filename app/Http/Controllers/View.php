<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room as Room;
use App\Status as Status;
use App\Location as Location;

class View extends Controller
{
    public function listrooms()
    {
      $rooms = Room::all();
      $locations = Location::all();
      $statuses = Status::all();

      return view('welcome',[
        'rooms' => $rooms,
        'locations' => $locations,
        'statuses' => $statuses,
      ]);
    }
    public function addrooms()
    {
      $rooms = Room::all();
      $locations = Location::all();
      $statuses = Status::all();
      return view('addrooms',[
        'rooms' => $rooms,
        'locations' => $locations,
        'statuses' => $statuses,
      ]);
    }
}
