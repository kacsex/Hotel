<?php

use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('meals')->delete();
        
        \DB::table('meals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Breakfast',
                'price' => 10,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Half board',
                'price' => 20,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'All inclusive',
                'price' => 35,
            ),
        ));
        
        
    }
}