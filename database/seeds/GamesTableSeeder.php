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
        $countries = [
            'Rusland',
            'Saudi-Arabië',
            'Egypte',
            'Uruguay',
            'Portugal',
            'Spanje',
            'Marokko',
            'Iran',
            'Frankrijk',
            'Australië',
            'Peru',
            'Denemarken',
            'Argentinië',
            'IJsland',
            'Kroatië',
            'Nigeria',
            'Brazilië',
            'Zwitserland',
            'Costa Rica',
            'Servië',
            'Duitsland',
            'Mexico',
            'Zweden',
            'Zuid-Korea',
            'België',
            'Panama',
            'Tunesië',
            'Engeland',
        ];

//        $games = [
//            1 => [
//                [
//                    'awayId' => ,
//                    'stadiumId' => ,
//                    'date' => ,
//                    'type' => ,
//                ],
//            ]
//        ]

        foreach ($countries as $key => $name) {
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
        }
    }

}
