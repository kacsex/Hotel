<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;
use App\RoomCategory;
use App\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $meal=Meal::all();
        return view('home',['meals'=>$meal]);
    }
    public function about()
    {
        return view('about');
    }
    public function booking()
    {
        return view('booking');
    }
    public function rooms()
    {
        return view('rooms',['rooms'=>null]);
    }
    public function amenities()
    {
        return view('amenities');
    }
    public function dining()
    {
        return view('dining');
    }
    public function contact()
    {
        return view('contact');
    }
    public function roomsSearch(Request $request)
    {
        $meals=Meal::all();
        $business = $request->input("gente");
        $dateFrom = date("Y-m-d",strtotime($request->input("checkin_date")));
        $dateUntil = date("Y-m-d",strtotime( $request->input("checkout_date")));
        $meal = Meal::find($request->input("meal"));
        if ($business == 5){
            $category = Room::join('room_categories', 'room_categories.id', 'id_category')->where('room_categories.business', 1)->pluck('rooms.id');
            $roomsOut = Room::leftJoin('bookings', 'bookings.id_room','rooms.id')->whereIn('rooms.id', $category)->where(function ( $query ) use ($dateFrom,$dateUntil) {
                $query->where( 'rooms.booked',false)->orWhere(function($query)use ($dateFrom,$dateUntil) {
                    $query->where('bookings.date_to','<', $dateFrom)->orWhere('bookings.date_from','>', $dateUntil);
                });
            })->get(['rooms.*']);
            return view( 'home' , ['rooms'=>$roomsOut,'meals'=>$meals,'mealS'=>$meal,'dateF'=>$dateFrom,'dateT'=>$dateUntil]);
        }else{
            $category = Room::join('room_categories', 'room_categories.id', 'id_category')->where('room_categories.business', 0)->where('room_categories.size', $business)->pluck('rooms.id');
            $roomsOut = Room::leftJoin('bookings', 'bookings.id_room','rooms.id')->whereIn('rooms.id', $category)->where(function ( $query ) use ($dateFrom,$dateUntil) {
                $query->where( 'rooms.booked',false)->orWhere(function($query)use ($dateFrom,$dateUntil) {
                    $query->where('bookings.date_to','<', $dateFrom)->orWhere('bookings.date_from','>', $dateUntil);
                });
            })->get(['rooms.*']);
            return view( 'home' ,  ['rooms'=>$roomsOut,'meals'=>$meals,'mealS'=>$meal,'dateF'=>$dateFrom,'dateT'=>$dateUntil]);
        }

        $to_name = Auth::user()->name;
        $to_email = Auth::user()->email;
        $data = array('name'=>"Sam Jose", "body" => "You have reserved a room at JutaVit");

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Hotel');
            $message->from('jorgriq97@gmail.com','Hotel Web');
        });

        return view( 'home');
    }
}
