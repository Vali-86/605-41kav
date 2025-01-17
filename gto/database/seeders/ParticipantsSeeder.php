<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Для хеширования пароля
use Faker\Factory as Faker;

class ParticipantsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('ru_RU'); // Русская локализация

        // Создадим 10 участников с русскими именами
        for ($i = 0; $i < 10; $i++) {
            DB::table('participants')->insert([
                'full_name' => $faker->name,
                'birth_date' => $faker->date,
                'gender' => $faker->randomElement(['мужской', 'женский']),
                'medical_approval' => $faker->boolean,
                'email' => $faker->unique()->safeEmail, // Уникальный email
                'password' => Hash::make('password123'), // Хешированный пароль
            ]);
        }
    }
}
