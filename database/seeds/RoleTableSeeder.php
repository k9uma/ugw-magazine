<?php

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (App::environment() === 'production') {
            exit('Not working in test environment');
        }
        //DB::table('role')->truncate();
        Role::create([
            'id'            => 1,
            'name'          => 'root',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);
        Role::create([
            'id'            => 2,

            'name'          => 'administrator',
            'description'   => 'Full access to create, edit, and update necessary information.'
        ]);
        Role::create([
            'id'            => 3,
            'name'          => 'manager',
            'description'   => 'Ability to View all the selected articles.'
        ]);
        Role::create([
            'id'            => 4,
            'name'          => 'coordinator',
            'description'   => 'Able to manage the faculty that the user belongs to, including approving articles and making comments.'
        ]);
        Role::create([
            'id'            => 5,
            'name'          => 'student',
            'description'   => 'A standard user that can upload and view articles and comments. No administrative features.'
        ]);
    }
}
