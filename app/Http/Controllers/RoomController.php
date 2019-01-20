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
        $rooms=RoomCategory::where('business',0)->get();
        return view( 'rooms' , ['rooms'=>$rooms, 'breadcrumb'=>'rooms','title'=>'Rooms']);
    }

    function roomsBusiness(){
        $rooms=RoomCategory::where('business',1)->get();
        return view( 'amenities' , ['rooms'=>$rooms, 'breadcrumb'=>'business','title'=>'Business']);
    }
}
