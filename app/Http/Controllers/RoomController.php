<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomCategory;
use App\Room;

class RoomController extends Controller
{
    function createForm(){
        RoomCategory::all();
    }

    function rooms(){
        $rooms=Room::all();
        return view( 'rooms' , ['rooms'=>$rooms, 'breadcrumb'=>'rooms','title'=>'Rooms']);
    }
}
