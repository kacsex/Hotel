<?php

use Illuminate\Database\Seeder;

class RoomCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_categories')->delete();
        
        \DB::table('room_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Luxury Room',
                'price' => 99,
                'size' => 2,
                'description' => 'Perfect for traveling couples',
                'business' => 0,
                'image_source' => 'theme/images/room-3.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Family room',
                'price' => 80,
                'size' => 3,
                'description' => 'Suitable for families',
                'business' => 0,
                'image_source' => 'theme/images/room-1.jpg',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Deluxe room',
                'price' => 50,
                'size' => 2,
                'description' => 'Two double beds',
                'business' => 0,
                'image_source' => 'theme/images/room-1.jpg',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Conference room 1',
                'price' => 200,
                'size' => 20,
                'description' => '',
                'business' => 1,
                'image_source' => 'theme/images/amenities-3.jpg',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Conference room big',
                'price' => 300,
                'size' => 40,
                'description' => '',
                'business' => 1,
                'image_source' => 'theme/images/amenities-3.jpg',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Business center',
                'price' => 500,
                'size' => 100,
                'description' => '',
                'business' => 1,
                'image_source' => 'theme/images/amenities-1.jpg',
            ),
        ));
        
        
    }
}