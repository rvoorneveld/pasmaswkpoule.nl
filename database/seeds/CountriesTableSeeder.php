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
        $countriesByCode = [
            'ru' => ['Rusland' => 'Russia',],
            'sa' => ['Saudi-Arabië' => 'Saudi-Arabia',],
            'eg' => ['Egypte' => 'Egypt',],
            'uy' => ['Uruguay' => 'Uruguay',],
            'pt' => ['Portugal' => 'Portugal',],
            'es' => ['Spanje' => 'Spain',],
            'ma' => ['Marokko' => 'Morocco',],
            'ir' => ['Iran' => 'Iran',],
            'fr' => ['Frankrijk' => 'France',],
            'au' => ['Australië' => 'Australia',],
            'pe' => ['Peru' => 'Peru',],
            'dk' => ['Denemarken' => 'Denmark',],
            'ar' => ['Argentinië' => 'Argentina',],
            'is' => ['IJsland' => 'Iceland',],
            'hr' => ['Kroatië' => 'Croatia',],
            'ng' => ['Nigeria' => 'Nigeria',],
            'br' => ['Brazilië' => 'Brazil',],
            'at' => ['Zwitserland' => 'Austria',],
            'cr' => ['Costa Rica' => 'Costa-Rica',],
            'rs' => ['Servië' => 'Serbia',],
            'de' => ['Duitsland' => 'Germany',],
            'mx' => ['Mexico' => 'Mexico',],
            'se' => ['Zweden' => 'Sweden',],
            'kr' => ['Zuid-Korea' => 'Korea-South',],
            'be' => ['België' => 'Belgium',],
            'pa' => ['Panama' => 'Panama',],
            'tn' => ['Tunesië' => 'Tunisia',],
            'uk' => ['Engeland' => 'United-Kingdom',],
            'pl' => ['Polen' => 'Poland',],
            'sn' => ['Senegal' => 'Senegal',],
            'co' => ['Colombia' => 'Colombia',],
            'jp' => ['Japan' => 'Japan',],
        ];
        foreach ($countriesByCode as $code => $countries) {
            foreach($countries as $name => $flag) {
                DB::table('countries')->insert([
                    'code' => $code,
                    'name' => htmlentities($name),
                    'flag' => "{$flag}.png",
                ]);
            }
        }
    }

}
