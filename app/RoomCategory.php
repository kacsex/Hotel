<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RoomCategory extends Model
{
    protected $table = "room_categories";
    public $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'price', 'size'];
}
