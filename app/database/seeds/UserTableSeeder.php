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

        $user = new User();
        $user->email = 'bob@codeup.com';
        $user->password = 'bob@codeup.com';
        $user->first_name = 'Bob';
        $user->last_name = 'Dobs';
        $user->username = 'JRBobDobbs';
        $user->save();

        $user = new User();
        $user->email = 'connie@codeup.com';
        $user->password = 'connie@codeup.com';
        $user->first_name = 'Connie';
        $user->last_name = 'Dobbs';
        $user->username = 'JRBobDobbs';
        $user->save();
    }



}