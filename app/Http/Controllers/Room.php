<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Room extends Controller
{
    public function insertOne(Request $request)
    {
      $room = new \App\Room;
      $room->name = $request->input('newRoom');
      $room->location()->attach($request->input('roomLocation'));
      $room->status()->attach($request->input('roomStatus'));
      $room->save();
      return redirect('/welcome');
    }

    public function deleteOne(Request $request)
   {
     \App\Room::destroy($request->input('id'));
     return redirect('/welcome');
   }
}
