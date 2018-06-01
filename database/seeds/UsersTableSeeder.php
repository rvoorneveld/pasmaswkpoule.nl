<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rick Voorneveld',
            'email' => 'rvoorneveld@me.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'isAdmin' => 20,
        ]);

        DB::table('users')->insert([
            'name' => 'Jordi Pasma',
            'email' => 'jordipasma@hotmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'isAdmin' => 10,
            'hasPaid' => now(),
        ]);
    }

}
