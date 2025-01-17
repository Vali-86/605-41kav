<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('ru_RU');  // Используем русскую локализацию

        // Создадим 5 событий с русскими названиями
        for ($i = 0; $i < 5; $i++) {
            DB::table('events')->insert([
                'event_date' => $faker->date,
                'location' => $faker->city,
                'details' => $faker->sentence,
            ]);
        }
    }
}
