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
        foreach ([
            'Voorronden',
            '1/8',
            '1/4',
            '1/2',
            '3',
            'FINALE'
        ] as $name) {
            DB::table('gametypes')->insert([
                'name' => $name,
            ]);
        }
    }

}
