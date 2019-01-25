<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    protected $table = "rooms";
    public $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id','id_category', 'floor', 'number', 'active', 'booked'];

    public function category() {
        return $this->hasOne('App\RoomCategory', 'id', 'id_category');
    }
}
