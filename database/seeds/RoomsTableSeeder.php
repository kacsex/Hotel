<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rooms')->delete();
        
        \DB::table('rooms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_category' => 3,
                'floor' => 2,
                'number' => 27,
                'active' => 0,
                'booked' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'id_category' => 1,
                'floor' => 1,
                'number' => 2,
                'active' => 1,
                'booked' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'id_category' => 2,
                'floor' => 1,
                'number' => 23,
                'active' => 1,
                'booked' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'id_category' => 1,
                'floor' => 1,
                'number' => 24,
                'active' => 0,
                'booked' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'id_category' => 3,
                'floor' => 1,
                'number' => 1,
                'active' => 1,
                'booked' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'id_category' => 3,
                'floor' => 1,
                'number' => 2,
                'active' => 1,
                'booked' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'id_category' => 3,
                'floor' => 1,
                'number' => 3,
                'active' => 1,
                'booked' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'id_category' => 3,
                'floor' => 1,
                'number' => 4,
                'active' => 1,
                'booked' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'id_category' => 2,
                'floor' => 1,
                'number' => 5,
                'active' => 1,
                'booked' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'id_category' => 2,
                'floor' => 1,
                'number' => 6,
                'active' => 1,
                'booked' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'id_category' => 2,
                'floor' => 1,
                'number' => 7,
                'active' => 1,
                'booked' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'id_category' => 2,
                'floor' => 1,
                'number' => 8,
                'active' => 1,
                'booked' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'id_category' => 2,
                'floor' => 1,
                'number' => 9,
                'active' => 1,
                'booked' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'id_category' => 4,
                'floor' => 1,
                'number' => 10,
                'active' => 1,
                'booked' => 0,
            ),
        ));
        
        
    }
}