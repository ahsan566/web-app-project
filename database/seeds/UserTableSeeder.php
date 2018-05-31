<?php

use \App\User;
use \App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Victor';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();

        $admin = new User();
        $admin->name = 'Alex';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();

        $author = new User();
        $author->name = 'Andy';
        $author->email = 'author@example.com';
        $author->password = bcrypt('author');
        $author->save();
    }
}
