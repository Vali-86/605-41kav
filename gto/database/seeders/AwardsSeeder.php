<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AwardsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Создадим 3 награды
        DB::table('awards')->insert([
            'name' => 'Gold',
            'min_score' => 90,
        ]);
        DB::table('awards')->insert([
            'name' => 'Silver',
            'min_score' => 75,
        ]);
        DB::table('awards')->insert([
            'name' => 'Bronze',
            'min_score' => 60,
        ]);
    }
}
