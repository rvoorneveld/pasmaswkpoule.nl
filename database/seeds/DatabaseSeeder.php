<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            UsersScoreTableSeeder::class,
            GameTypesTableSeeder::class,
            CountriesTableSeeder::class,
            CitiesTableSeeder::class,
            StadiumsTableSeeder::class,
            GamesTableSeeder::class,
        ]);
    }

}
