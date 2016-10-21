<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name="Root User";
        $user->email="root@root.com";
        $user->password=bcrypt('user1234');
        $user->role_id= 1;
        $user->save();

        $user = new User();
        $user->name="Admin user";
        $user->email="admin@admin.com";
        $user->password=bcrypt('user1234');
        $user->role_id= 2;
        $user->save();

        $user = new User();
        $user->name="Marketing Manager";
        $user->email="manager@manager.com";
        $user->password=bcrypt('user1234');
        $user->role_id= 3;
        $user->save();

        $user = new User();
        $user->name="Faculty Manager";
        $user->email="faculty@faculty.com";
        $user->password=bcrypt('user1234');
        $user->role_id= 4;
        $user->save();

        $user = new User();
        $user->name="Student User";
        $user->email="student@student.com";
        $user->password=bcrypt('user1234');
        $user->role_id= 5;
        $user->save();
    }
}
