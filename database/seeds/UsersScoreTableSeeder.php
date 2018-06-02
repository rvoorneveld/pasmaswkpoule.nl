<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersScoreTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_score')->insert([
            'userId' => 1,
            'points' => NULL,
        ]);

        DB::table('users_score')->insert([
            'userId' => 2,
            'points' => NULL,
        ]);
    }

}
