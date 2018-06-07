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
            'Polen',
            'Senegal',
            'Colombia',
            'Japan',
        ];

        $gamesByPoule = [
            'A' => [
                [
                    'homeId' => 1,
                    'awayId' => 2,
                    'stadiumId' => 1,
                    'typeId' => 1,
                    'date' => '2018-06-14',
                    'time' => '17:00',
                ], [
                    'homeId' => 3,
                    'awayId' => 4,
                    'stadiumId' => 6,
                    'typeId' => 1,
                    'date' => '2018-06-15',
                    'time' => '14:00',
                ], [
                    'homeId' => 1,
                    'awayId' => 3,
                    'stadiumId' => 3,
                    'typeId' => 1,
                    'date' => '2018-06-19',
                    'time' => '20:00',
                ], [
                    'homeId' => 4,
                    'awayId' => 2,
                    'stadiumId' => 9,
                    'typeId' => 1,
                    'date' => '2018-06-20',
                    'time' => '17:00',
                ], [
                    'homeId' => 4,
                    'awayId' => 1,
                    'stadiumId' => 11,
                    'typeId' => 1,
                    'date' => '2018-06-25',
                    'time' => '16:00',
                ], [
                    'homeId' => 2,
                    'awayId' => 3,
                    'stadiumId' => 10,
                    'typeId' => 1,
                    'date' => '2018-06-25',
                    'time' => '16:00',
                ]
            ],
            'B' => [
                [
                    'homeId' => 7,
                    'awayId' => 8,
                    'stadiumId' => 3,
                    'typeId' => 1,
                    'date' => '2018-06-15',
                    'time' => '17:00',
                ], [
                    'homeId' => 5,
                    'awayId' => 6,
                    'stadiumId' => 4,
                    'typeId' => 1,
                    'date' => '2018-06-15',
                    'time' => '20:00',
                ], [
                    'homeId' => 5,
                    'awayId' => 7,
                    'stadiumId' => 1,
                    'typeId' => 1,
                    'date' => '2018-06-20',
                    'time' => '14:00',
                ], [
                    'homeId' => 8,
                    'awayId' => 6,
                    'stadiumId' => 9,
                    'typeId' => 1,
                    'date' => '2018-06-20',
                    'time' => '20:00',
                ], [
                    'homeId' => 8,
                    'awayId' => 5,
                    'stadiumId' => 7,
                    'typeId' => 1,
                    'date' => '2018-06-25',
                    'time' => '20:00',
                ], [
                    'homeId' => 6,
                    'awayId' => 7,
                    'stadiumId' => 5,
                    'typeId' => 1,
                    'date' => '2018-06-25',
                    'time' => '20:00',
                ]
            ],
            'C' => [
                [
                    'homeId' => 9,
                    'awayId' => 10,
                    'stadiumId' => 9,
                    'typeId' => 1,
                    'date' => '2018-06-16',
                    'time' => '12:00',
                ], [
                    'homeId' => 11,
                    'awayId' => 12,
                    'stadiumId' => 8,
                    'typeId' => 1,
                    'date' => '2018-06-16',
                    'time' => '18:00',
                ], [
                    'homeId' => 12,
                    'awayId' => 10,
                    'stadiumId' => 12,
                    'typeId' => 1,
                    'date' => '2018-06-21',
                    'time' => '14:00',
                ], [
                    'homeId' => 9,
                    'awayId' => 11,
                    'stadiumId' => 7,
                    'typeId' => 1,
                    'date' => '2018-06-21',
                    'time' => '17:00',
                ], [
                    'homeId' => 12,
                    'awayId' => 9,
                    'stadiumId' => 1,
                    'typeId' => 1,
                    'date' => '2018-06-26',
                    'time' => '16:00',
                ], [
                    'homeId' => 10,
                    'awayId' => 11,
                    'stadiumId' => 4,
                    'typeId' => 1,
                    'date' => '2018-06-26',
                    'time' => '16:00',
                ]
            ],
            'D' => [
                [
                    'homeId' => 13,
                    'awayId' => 14,
                    'stadiumId' => 2,
                    'typeId' => 1,
                    'date' => '2018-06-16',
                    'time' => '15:00',
                ], [
                    'homeId' => 15,
                    'awayId' => 16,
                    'stadiumId' => 5,
                    'typeId' => 1,
                    'date' => '2018-06-16',
                    'time' => '21:00',
                ], [
                    'homeId' => 13,
                    'awayId' => 15,
                    'stadiumId' => 6,
                    'typeId' => 1,
                    'date' => '2018-06-21',
                    'time' => '20:00',
                ], [
                    'homeId' => 14,
                    'awayId' => 16,
                    'stadiumId' => 11,
                    'typeId' => 1,
                    'date' => '2018-06-22',
                    'time' => '17:00',
                ], [
                    'homeId' => 16,
                    'awayId' => 13,
                    'stadiumId' => 3,
                    'typeId' => 1,
                    'date' => '2018-06-26',
                    'time' => '20:00',
                ], [
                    'homeId' => 14,
                    'awayId' => 15,
                    'stadiumId' => 10,
                    'typeId' => 1,
                    'date' => '2018-06-26',
                    'time' => '20:00',
                ]
            ],
            'E' => [
                [
                    'homeId' => 19,
                    'awayId' => 20,
                    'stadiumId' => 12,
                    'typeId' => 1,
                    'date' => '2018-06-17',
                    'time' => '14:00',
                ], [
                    'homeId' => 17,
                    'awayId' => 18,
                    'stadiumId' => 10,
                    'typeId' => 1,
                    'date' => '2018-06-17',
                    'time' => '20:00',
                ], [
                    'homeId' => 17,
                    'awayId' => 19,
                    'stadiumId' => 3,
                    'typeId' => 1,
                    'date' => '2018-06-22',
                    'time' => '14:00',
                ], [
                    'homeId' => 20,
                    'awayId' => 18,
                    'stadiumId' => 5,
                    'typeId' => 1,
                    'date' => '2018-06-22',
                    'time' => '20:00',
                ], [
                    'homeId' => 20,
                    'awayId' => 17,
                    'stadiumId' => 2,
                    'typeId' => 1,
                    'date' => '2018-06-27',
                    'time' => '20:00',
                ], [
                    'homeId' => 18,
                    'awayId' => 19,
                    'stadiumId' => 6,
                    'typeId' => 1,
                    'date' => '2018-06-27',
                    'time' => '20:00',
                ]
            ],
            'F' => [
                [
                    'homeId' => 21,
                    'awayId' => 22,
                    'stadiumId' => 1,
                    'typeId' => 1,
                    'date' => '2018-06-17',
                    'time' => '17:00',
                ], [
                    'homeId' => 23,
                    'awayId' => 24,
                    'stadiumId' => 6,
                    'typeId' => 1,
                    'date' => '2018-06-18',
                    'time' => '14:00',
                ], [
                    'homeId' => 24,
                    'awayId' => 22,
                    'stadiumId' => 10,
                    'typeId' => 1,
                    'date' => '2018-06-23',
                    'time' => '17:00',
                ], [
                    'homeId' => 21,
                    'awayId' => 23,
                    'stadiumId' => 4,
                    'typeId' => 1,
                    'date' => '2018-06-23',
                    'time' => '20:00',
                ], [
                    'homeId' => 22,
                    'awayId' => 23,
                    'stadiumId' => 7,
                    'typeId' => 1,
                    'date' => '2018-06-27',
                    'time' => '16:00',
                ], [
                    'homeId' => 24,
                    'awayId' => 21,
                    'stadiumId' => 9,
                    'typeId' => 1,
                    'date' => '2018-06-27',
                    'time' => '16:00',
                ]
            ],
            'G' => [
                [
                    'homeId' => 25,
                    'awayId' => 26,
                    'stadiumId' => 4,
                    'typeId' => 1,
                    'date' => '2018-06-18',
                    'time' => '17:00',
                ], [
                    'homeId' => 27,
                    'awayId' => 28,
                    'stadiumId' => 11,
                    'typeId' => 1,
                    'date' => '2018-06-18',
                    'time' => '20:00',
                ], [
                    'homeId' => 25,
                    'awayId' => 27,
                    'stadiumId' => 2,
                    'typeId' => 1,
                    'date' => '2018-06-23',
                    'time' => '14:00',
                ], [
                    'homeId' => 28,
                    'awayId' => 26,
                    'stadiumId' => 6,
                    'typeId' => 1,
                    'date' => '2018-06-24',
                    'time' => '14:00',
                ], [
                    'homeId' => 26,
                    'awayId' => 27,
                    'stadiumId' => 8,
                    'typeId' => 1,
                    'date' => '2018-06-28',
                    'time' => '20:00',
                ], [
                    'homeId' => 28,
                    'awayId' => 25,
                    'stadiumId' => 5,
                    'typeId' => 1,
                    'date' => '2018-06-28',
                    'time' => '20:00',
                ]
            ],
            'H' => [
                [
                    'homeId' => 31,
                    'awayId' => 32,
                    'stadiumId' => 8,
                    'typeId' => 1,
                    'date' => '2018-06-19',
                    'time' => '14:00',
                ], [
                    'homeId' => 29,
                    'awayId' => 30,
                    'stadiumId' => 2,
                    'typeId' => 1,
                    'date' => '2018-06-19',
                    'time' => '17:00',
                ], [
                    'homeId' => 32,
                    'awayId' => 30,
                    'stadiumId' => 7,
                    'typeId' => 1,
                    'date' => '2018-06-24',
                    'time' => '17:00',
                ], [
                    'homeId' => 29,
                    'awayId' => 31,
                    'stadiumId' => 9,
                    'typeId' => 1,
                    'date' => '2018-06-24',
                    'time' => '20:00',
                ], [
                    'homeId' => 30,
                    'awayId' => 31,
                    'stadiumId' => 12,
                    'typeId' => 1,
                    'date' => '2018-06-28',
                    'time' => '16:00',
                ], [
                    'homeId' => 32,
                    'awayId' => 29,
                    'stadiumId' => 11,
                    'typeId' => 1,
                    'date' => '2018-06-28',
                    'time' => '16:00',
                ],
            ]
        ];

        foreach ($gamesByPoule as $poule => $games) {
            foreach ($games as $game) {
                DB::table('games')->insert(
                    array_merge(['poule' => $poule], $game)
                );
            }
        }
    }

}
