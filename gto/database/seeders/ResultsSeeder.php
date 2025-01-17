<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultsSeeder extends Seeder
{
    public function run()
    {
        // Пример вставки результатов с русскими данными
        DB::table('results')->insert([
            'participant_id' => 1,
            'discipline_id' => 5,
            'event_id' => 4,
            'score' => 48,
            'status' => 'неудачно',
            'award_id' => 1,  // Ссылаемся на существующую награду (например, золотую)
        ]);
    }
}
