<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(MealsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(RoomCategoriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
