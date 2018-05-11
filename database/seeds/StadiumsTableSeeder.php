<?php

use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->insert([
            'name' => 'Johan Cruijf Arena',
            'url' => 'http://www.johancruijffarena.nl/',
        ]);

        DB::table('stadiums')->insert([
            'name' => 'De Kuip',
            'url' => 'https://www.dekuip.nl/',
        ]);
    }

}
