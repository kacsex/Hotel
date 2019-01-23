<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";
    public $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'id_user', 'id_room', 'id_meal', 'date_from', 'date_to',];

    public function user() {
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function room() {
        return $this->hasOne('App\Room', 'id', 'id_room');
    }

    public function meal() {
        return $this->hasOne('App\Meal', 'id', 'id_meal');
    }
}
