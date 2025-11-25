<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{

    public function run()
    {
        $seasons = ['春', '夏', '秋', '冬'];

        foreach ($seasons as $season) {
            \DB::table('seasons')->insert([
                'name' => $season,
            ]);
        }
    }
}
