<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            25 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 10:54:13',
            ),
            26 => 
            array (
                'id' => 52,
                'key' => 'browse_room_categories',
                'table_name' => 'room_categories',
                'created_at' => '2018-12-07 18:46:24',
                'updated_at' => '2018-12-07 18:46:24',
            ),
            27 => 
            array (
                'id' => 53,
                'key' => 'read_room_categories',
                'table_name' => 'room_categories',
                'created_at' => '2018-12-07 18:46:24',
                'updated_at' => '2018-12-07 18:46:24',
            ),
            28 => 
            array (
                'id' => 54,
                'key' => 'edit_room_categories',
                'table_name' => 'room_categories',
                'created_at' => '2018-12-07 18:46:24',
                'updated_at' => '2018-12-07 18:46:24',
            ),
            29 => 
            array (
                'id' => 55,
                'key' => 'add_room_categories',
                'table_name' => 'room_categories',
                'created_at' => '2018-12-07 18:46:24',
                'updated_at' => '2018-12-07 18:46:24',
            ),
            30 => 
            array (
                'id' => 56,
                'key' => 'delete_room_categories',
                'table_name' => 'room_categories',
                'created_at' => '2018-12-07 18:46:24',
                'updated_at' => '2018-12-07 18:46:24',
            ),
            31 => 
            array (
                'id' => 57,
                'key' => 'browse_rooms',
                'table_name' => 'rooms',
                'created_at' => '2018-12-07 18:58:21',
                'updated_at' => '2018-12-07 18:58:21',
            ),
            32 => 
            array (
                'id' => 58,
                'key' => 'read_rooms',
                'table_name' => 'rooms',
                'created_at' => '2018-12-07 18:58:21',
                'updated_at' => '2018-12-07 18:58:21',
            ),
            33 => 
            array (
                'id' => 59,
                'key' => 'edit_rooms',
                'table_name' => 'rooms',
                'created_at' => '2018-12-07 18:58:21',
                'updated_at' => '2018-12-07 18:58:21',
            ),
            34 => 
            array (
                'id' => 60,
                'key' => 'add_rooms',
                'table_name' => 'rooms',
                'created_at' => '2018-12-07 18:58:21',
                'updated_at' => '2018-12-07 18:58:21',
            ),
            35 => 
            array (
                'id' => 61,
                'key' => 'delete_rooms',
                'table_name' => 'rooms',
                'created_at' => '2018-12-07 18:58:21',
                'updated_at' => '2018-12-07 18:58:21',
            ),
            36 => 
            array (
                'id' => 62,
                'key' => 'browse_meals',
                'table_name' => 'meals',
                'created_at' => '2018-12-07 22:31:56',
                'updated_at' => '2018-12-07 22:31:56',
            ),
            37 => 
            array (
                'id' => 63,
                'key' => 'read_meals',
                'table_name' => 'meals',
                'created_at' => '2018-12-07 22:31:56',
                'updated_at' => '2018-12-07 22:31:56',
            ),
            38 => 
            array (
                'id' => 64,
                'key' => 'edit_meals',
                'table_name' => 'meals',
                'created_at' => '2018-12-07 22:31:56',
                'updated_at' => '2018-12-07 22:31:56',
            ),
            39 => 
            array (
                'id' => 65,
                'key' => 'add_meals',
                'table_name' => 'meals',
                'created_at' => '2018-12-07 22:31:56',
                'updated_at' => '2018-12-07 22:31:56',
            ),
            40 => 
            array (
                'id' => 66,
                'key' => 'delete_meals',
                'table_name' => 'meals',
                'created_at' => '2018-12-07 22:31:56',
                'updated_at' => '2018-12-07 22:31:56',
            ),
            41 => 
            array (
                'id' => 67,
                'key' => 'browse_bookings',
                'table_name' => 'bookings',
                'created_at' => '2018-12-07 22:45:08',
                'updated_at' => '2018-12-07 22:45:08',
            ),
            42 => 
            array (
                'id' => 68,
                'key' => 'read_bookings',
                'table_name' => 'bookings',
                'created_at' => '2018-12-07 22:45:08',
                'updated_at' => '2018-12-07 22:45:08',
            ),
            43 => 
            array (
                'id' => 69,
                'key' => 'edit_bookings',
                'table_name' => 'bookings',
                'created_at' => '2018-12-07 22:45:08',
                'updated_at' => '2018-12-07 22:45:08',
            ),
            44 => 
            array (
                'id' => 70,
                'key' => 'add_bookings',
                'table_name' => 'bookings',
                'created_at' => '2018-12-07 22:45:08',
                'updated_at' => '2018-12-07 22:45:08',
            ),
            45 => 
            array (
                'id' => 71,
                'key' => 'delete_bookings',
                'table_name' => 'bookings',
                'created_at' => '2018-12-07 22:45:08',
                'updated_at' => '2018-12-07 22:45:08',
            ),
        ));
        
        
    }
}