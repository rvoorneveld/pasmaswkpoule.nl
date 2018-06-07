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
            'Rusland' => 'Russia',
            'Saudi-Arabië' => 'Saudi-Arabia',
            'Egypte' => 'Egypt',
            'Uruguay' => 'Uruguay',
            'Portugal' => 'Portugal',
            'Spanje' => 'Spain',
            'Marokko' => 'Morocco',
            'Iran' => 'Iran',
            'Frankrijk' => 'France',
            'Australië' => 'Australia',
            'Peru' => 'Peru',
            'Denemarken' => 'Denmark',
            'Argentinië' => 'Argentina',
            'IJsland' => 'Iceland',
            'Kroatië' => 'Croatia',
            'Nigeria' => 'Nigeria',
            'Brazilië' => 'Brazil',
            'Zwitserland' => 'Austria',
            'Costa Rica' => 'Costa-Rica',
            'Servië' => 'Serbia',
            'Duitsland' => 'Germany',
            'Mexico' => 'Mexico',
            'Zweden' => 'Sweden',
            'Zuid-Korea' => 'Korea-South',
            'België' => 'Belgium',
            'Panama' => 'Panama',
            'Tunesië' => 'Tunisia',
            'Engeland' => 'United-Kingdom',
            'Polen' => 'Poland',
            'Senegal' => 'Senegal',
            'Colombia' => 'Colombia',
            'Japan' => 'Japan',
        ];
        foreach ($countries as $name => $flag) {
            DB::table('countries')->insert([
                'name' => htmlentities($name),
                'flag' => "{$flag}.png",
            ]);
        }
    }

}
