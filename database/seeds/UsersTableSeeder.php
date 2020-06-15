<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'firstname'=>'admin',
            'lastname'=>'admin',
            'email'=> 'admin@app.com',
            'password' => bcrypt('secret'),
            'address'=> 'gaza',
            'tel_no'=>'0597128218'
        ]);
        $user->attachRole('super_admin');
    }
}
