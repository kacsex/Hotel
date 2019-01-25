<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomCategory;
use App\Room;
use App\Meal;

class RoomController extends Controller
{
    function createForm(){
        RoomCategory::all();
    }

    function rooms(){
        $meal=Meal::all();
        $rooms=RoomCategory::where('business',0)->get();
        return view( 'rooms' , ['rooms'=>$rooms,'meals'=>$meal, 'title' => 'Discover Our Rooms', 'breadcrumb' => 'rooms']);
    }

    function roomsBusiness(){
        $meal=Meal::all();
        $rooms=RoomCategory::where('business',1)->get();
        return view( 'business' , ['rooms'=>$rooms, 'meals'=>$meal, 'title' => 'Discover Our Amenities', 'breadcrumb' => 'business']);
    }
}
