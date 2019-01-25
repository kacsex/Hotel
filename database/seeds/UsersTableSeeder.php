<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kYo5jaqv5K7uINoVozHPi.7PW7jw5L7Sm3yEZN68I7rhychU3cEfK',
                'remember_token' => 'dzjG780ewlla2oQbF6BHehnLHTHKYraRXDBIi191kcrIQVbGIeu0olCWYJuf',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-12-07 10:54:13',
                'updated_at' => '2018-12-11 13:52:37',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'receptionist',
                'email' => 'receptionist@receptionist.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/AxB7vhvcEE1aMBp11lIu.N4R1/D.2oiOykrxd6ymvoddXupLGVCK',
                'remember_token' => 'cTKmnln7F8Gw3myg8SALFIQbSRjWPcpXIDHeWyH11ZsyuYBDtQgyBFONjTg0',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-12-11 15:12:01',
                'updated_at' => '2018-12-11 15:12:01',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Guest',
                'email' => 'guest@guest.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GmLmGJv6U6SbPaLNQV.WuuOe2MCk7CuWX1sfGy82ro6JWWw19dm6O',
                'remember_token' => 'hP3pKsA6Vbmxp2J2Oh42mZ31f034r56mijSCOK8W7Mixw86A87CtrlCFnYMz',
                'settings' => NULL,
                'created_at' => '2019-01-20 16:35:02',
                'updated_at' => '2019-01-20 16:35:02',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'kacsex',
                'email' => 'zsoltmaschek@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bVFEjcM3/doZ0cgpz8LKDeH.CSIqRFnsdg6PUC/yEhIT9O8hRtffa',
                'remember_token' => 'UFqnzZ8ySaM2lSauz0tPLqAGowasbmCbzOQRGclQDPVimQwBn4vpE3XvccUk',
                'settings' => NULL,
                'created_at' => '2019-01-24 15:05:48',
                'updated_at' => '2019-01-24 15:05:48',
            ),
        ));
        
        
    }
}