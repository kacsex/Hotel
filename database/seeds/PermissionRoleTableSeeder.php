<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            10 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            12 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 18,
                'role_id' => 3,
            ),
            14 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 19,
                'role_id' => 3,
            ),
            16 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            18 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 57,
                'role_id' => 3,
            ),
            25 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 58,
                'role_id' => 3,
            ),
            27 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 59,
                'role_id' => 3,
            ),
            29 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 60,
                'role_id' => 3,
            ),
            31 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 61,
                'role_id' => 3,
            ),
            33 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 67,
                'role_id' => 3,
            ),
            40 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 68,
                'role_id' => 3,
            ),
            42 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 69,
                'role_id' => 3,
            ),
            44 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 70,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 71,
                'role_id' => 3,
            ),
        ));
        
        
    }
}