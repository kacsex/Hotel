<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    function book($id, $meal,$dateF,$dateT){
        $dateFrom = date("Y-m-d",strtotime($dateF));
        $dateUntil = date("Y-m-d",strtotime( $dateT));
        $book=new Booking();
        $book->id_meal=1;
        $book->id_room=$id;
        $book->id_user=Auth::id();
        $book->date_from=$dateFrom;
        $book->date_to=$dateUntil;
        $book->save();
        $room = Room::find($id);
        $room->booked=true;
        $room->save();
        return redirect('home');
    }
}
