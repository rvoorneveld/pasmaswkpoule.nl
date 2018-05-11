<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'homeId' => 1,
            'awayId' => 2,
            'stadiumId' => 1,
            'goalsHome' => null,
            'goalsAway' => null,
            'cardsYellow' => null,
            'cardsRed' => null,
            'typeId' => 1,
            'date' => '2018-05-15',
            'time' => '20:00:00',
        ]);

        DB::table('games')->insert([
            'homeId' => 3,
            'awayId' => 4,
            'stadiumId' => 2,
            'goalsHome' => null,
            'goalsAway' => null,
            'cardsYellow' => null,
            'cardsRed' => null,
            'typeId' => 1,
            'date' => '2018-05-16',
            'time' => '20:30:00',
        ]);
    }

}
