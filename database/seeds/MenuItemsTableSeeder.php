<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-08 14:24:15',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-08 14:24:12',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2019-01-20 18:09:34',
                'route' => NULL,
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 12:24:08',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 12:24:08',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 12:24:08',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 12:24:08',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 6,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 12:24:08',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-07 12:24:08',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Room Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-paperclip',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2018-12-07 18:46:24',
                'updated_at' => '2018-12-18 16:26:15',
                'route' => 'voyager.room-categories.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Rooms',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-key',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2018-12-07 18:53:44',
                'updated_at' => '2018-12-08 15:39:18',
                'route' => 'voyager.rooms.index',
                'parameters' => 'null',
            ),
            11 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Meals',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-pizza',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2018-12-07 22:31:56',
                'updated_at' => '2018-12-18 16:26:01',
                'route' => 'voyager.meals.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Bookings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-calendar',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2018-12-07 22:45:08',
                'updated_at' => '2018-12-08 15:39:09',
                'route' => 'voyager.bookings.index',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}