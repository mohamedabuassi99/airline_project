<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = \App\Role::create([
            'name'=>'super_admin',
            'display_name'=>'super_admin',
            'description'=>'can do anything in the role',
        ]);
        $user = \App\Role::create([
            'name'=>'user',
            'display_name'=>'user',
            'description'=>'can do specific tasks',
        ]);

    }
}
