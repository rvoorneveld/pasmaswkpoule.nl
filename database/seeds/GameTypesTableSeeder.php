<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTypesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gameTypes')->insert([
            'name' => 'Voorronden',
        ]);

        DB::table('gameTypes')->insert([
            'name' => '8e finales',
        ]);

        DB::table('gameTypes')->insert([
            'name' => '4e finales',
        ]);

        DB::table('gameTypes')->insert([
            'name' => 'Halve finale',
        ]);

        DB::table('gameTypes')->insert([
            'name' => 'Finale',
        ]);
    }

}
