<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ParticipantsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Создадим 10 участников
        for ($i = 0; $i < 10; $i++) {
            DB::table('participants')->insert([
                'full_name' => $faker->name,
                'birth_date' => $faker->date,
                'gender' => $faker->randomElement(['male', 'female']),
                'medical_approval' => $faker->boolean,
            ]);
        }
    }
}
