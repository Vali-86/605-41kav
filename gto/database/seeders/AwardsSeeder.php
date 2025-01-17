<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardsSeeder extends Seeder
{
    public function run()
    {
        // Создаем несколько наград с русскими названиями
        DB::table('awards')->insert([
            'name' => 'Золотой',
            'min_score' => 90,
        ]);
        DB::table('awards')->insert([
            'name' => 'Серебряный',
            'min_score' => 75,
        ]);
        DB::table('awards')->insert([
            'name' => 'Бронзовый',
            'min_score' => 60,
        ]);
    }
}
