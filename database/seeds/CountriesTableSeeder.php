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
        DB::table('countries')->insert([
            'name' => 'Nederland',
            'flag' => 'nl.png',
            'poule' => 'A',
        ]);

        DB::table('countries')->insert([
            'name' => 'Belgie',
            'flag' => 'be.png',
            'poule' => 'A',
        ]);

        DB::table('countries')->insert([
            'name' => 'Duitsland',
            'flag' => 'de.png',
            'poule' => 'B',
        ]);

        DB::table('countries')->insert([
            'name' => 'Frankrijk',
            'flag' => 'fr.png',
            'poule' => 'B',
        ]);

    }

}
