<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DisciplinesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Создадим 5 дисциплин
        for ($i = 0; $i < 5; $i++) {
            DB::table('disciplines')->insert([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'max_score' => $faker->numberBetween(50, 100),
            ]);
        }
    }
}
