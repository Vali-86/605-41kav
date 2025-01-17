<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ResultsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Создадим 10 результатов
        for ($i = 0; $i < 10; $i++) {
            DB::table('results')->insert([
                'participant_id' => $faker->numberBetween(1, 10),
                'discipline_id' => $faker->numberBetween(1, 5),
                'event_id' => $faker->numberBetween(1, 5),
                'score' => $faker->numberBetween(0, 100),
                'status' => $faker->randomElement(['pass', 'fail']),
                'award_id' => $faker->numberBetween(1, 3),
            ]);
        }
    }
}
