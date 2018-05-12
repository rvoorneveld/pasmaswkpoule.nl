<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'A' => [
                'Rusland' => 'Russia',
                'Saudi-Arabië' => 'Saudi-Arabia',
                'Egypte' => 'Egypt',
                'Uruguay' => 'Uruguay',
            ],
            'B' => [
                'Portugal' => 'Portugal',
                'Spanje' => 'Spain',
                'Marokko' => 'Morocco',
                'Iran' => 'Iran',
            ],
            'C' => [
                'Frankrijk' => 'France',
                'Australië' => 'Australia',
                'Peru' => 'Peru',
                'Denemarken' => 'Denmark',
            ],
            'D' => [
                'Argentinië' => 'Argentina',
                'IJsland' => 'Iceland',
                'Kroatië' => 'Croatia',
                'Nigeria' => 'Nigeria',
            ],
            'E' => [
                'Brazilië' => 'Brazil',
                'Zwitserland' => 'Austria',
                'Costa Rica' => 'Costa-Rica',
                'Servië' => 'Serbia',
            ],
            'F' => [
                'Duitsland' => 'Germany',
                'Mexico' => 'Mexico',
                'Zweden' => 'Sweden',
                'Zuid-Korea' => 'Korea-South',
            ],
            'G' => [
                'België' => 'Belgium',
                'Panama' => 'Panama',
                'Tunesië' => 'Tunisia',
                'Engeland' => 'United-Kingdom',
            ],
        ];

        foreach (range('A', 'H') as $poule) {
            if (
                true === array_key_exists($poule, $countries) &&
                true === is_array($countries[$poule])
            ) {
                foreach ($countries[$poule] as $name => $flag) {
                    DB::table('countries')->insert([
                        'name' => htmlentities($name),
                        'flag' => "{$flag}.png",
                        'poule' => $poule,
                    ]);
                }
            }
        }
    }

}
