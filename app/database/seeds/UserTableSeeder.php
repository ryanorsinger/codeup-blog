<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = 'admin@codeup.com';
        $user->first_name = 'Admin';
        $user->last_name = 'CodeUp';
        $user->username = 'codeup';
        $user->save();
    }



}