<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Создадим 5 событий
        for ($i = 0; $i < 5; $i++) {
            DB::table('events')->insert([
                'event_date' => $faker->date,
                'location' => $faker->city,
                'details' => $faker->paragraph,
            ]);
        }
    }
}
