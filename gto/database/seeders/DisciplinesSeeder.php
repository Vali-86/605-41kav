<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinesSeeder extends Seeder
{
    public function run()
    {
        // Создаем дисциплины
        DB::table('disciplines')->insert([
            'name' => 'Бег',
            'description' => 'Дисциплина на скорость.',
            'max_score' => 100,
        ]);
        DB::table('disciplines')->insert([
            'name' => 'Прыжки в длину',
            'description' => 'Дисциплина на дальность.',
            'max_score' => 100,
        ]);
        DB::table('disciplines')->insert([
            'name' => 'Силовые упражнения',
            'description' => 'Дисциплина на выносливость и силу.',
            'max_score' => 100,
        ]);
        DB::table('disciplines')->insert([
            'name' => 'Плавание',
            'description' => 'Дисциплина на выносливость в воде.',
            'max_score' => 100,
        ]);
        DB::table('disciplines')->insert([
            'name' => 'Лыжи',
            'description' => 'Дисциплина на лыжах.',
            'max_score' => 100,
        ]);
    }
}
