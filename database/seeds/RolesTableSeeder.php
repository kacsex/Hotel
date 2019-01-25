<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Client',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 13:24:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'recepcionist',
                'display_name' => 'Recepcionist',
                'created_at' => '2018-12-07 13:23:48',
                'updated_at' => '2018-12-07 13:23:48',
            ),
        ));
        
        
    }
}