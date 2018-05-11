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
            GamesTableSeeder::class,
            GameTypesTableSeeder::class,
            CountriesTableSeeder::class,
            StadiumsTableSeeder::class,
        ]);
    }

}
