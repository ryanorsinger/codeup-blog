<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        $post = new Post();
        $post->title = 'Converted the login form to use form builder';
        $post->body = "Used the 'Laravel Cheat Sheet' on http://cheats.jesse-obrien.ca/ and Laravel 4 docs to modify the site login form to use Laravel Form Builder on the login blade view. Laravel's form builder is fast, easy, and awesome. The key thing to look up is how the Form Builder takes in HTML attributes like class, value, placeholder, and so forth. The arrangement of elements is different on textarea vs. text vs. password or email.";
        $post->user_id = 1;
        $post->created_at = '2014-04-01 15:18:57';
        $post->save();


        $post = new Post();
        $post->title = 'showing messages for success on fail or login. Use Session::flash()';
        $post->body = "Create the Session::Flash message on login fail/success happened in a few short steps. ";
        $post->user_id = 1;
        $post->created_at = '2014-04-02 15:18:57';
        $post->save();

        $post = new Post();
        $post->title = 'Adding a migration to modify a table and seed ';
        $post->body = "Create the database migration. php artisan migrate:make create_table_to_modify. Then edit the migration file to do the up functions I need and ensure that the down functions will undo each and every function in the up. Once ready, go to laravel instance and do php artisan migrate.";
        $post->user_id = 1;
        $post->created_at = '2014-04-02 16:18:57';
        $post->save();


    }



}