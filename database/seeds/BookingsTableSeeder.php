<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bookings')->delete();
        
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_user' => 3,
                'id_room' => 1,
                'id_meal' => 2,
                'date_from' => '2019-10-12',
                'date_to' => '2019-10-15',
            ),
            1 => 
            array (
                'id' => 2,
                'id_user' => 3,
                'id_room' => 4,
                'id_meal' => 3,
                'date_from' => '2019-10-18',
                'date_to' => '2019-10-23',
            ),
            2 => 
            array (
                'id' => 3,
                'id_user' => NULL,
                'id_room' => 4,
                'id_meal' => 1,
                'date_from' => '2019-01-23',
                'date_to' => '2019-01-30',
            ),
            3 => 
            array (
                'id' => 4,
                'id_user' => NULL,
                'id_room' => 1,
                'id_meal' => 1,
                'date_from' => '2019-01-08',
                'date_to' => '2019-01-22',
            ),
            4 => 
            array (
                'id' => 5,
                'id_user' => 4,
                'id_room' => 1,
                'id_meal' => 1,
                'date_from' => '2019-01-02',
                'date_to' => '2019-01-16',
            ),
            5 => 
            array (
                'id' => 6,
                'id_user' => 4,
                'id_room' => 2,
                'id_meal' => 1,
                'date_from' => '2019-01-01',
                'date_to' => '2019-01-15',
            ),
            6 => 
            array (
                'id' => 7,
                'id_user' => 1,
                'id_room' => 13,
                'id_meal' => 1,
                'date_from' => '2019-01-01',
                'date_to' => '2019-01-03',
            ),
            7 => 
            array (
                'id' => 8,
                'id_user' => 1,
                'id_room' => 9,
                'id_meal' => 1,
                'date_from' => '2019-01-01',
                'date_to' => '2019-01-03',
            ),
        ));
        
        
    }
}