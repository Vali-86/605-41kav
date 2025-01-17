<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AwardsSeeder::class,
            ParticipantsSeeder::class,
            EventsSeeder::class,
            DisciplinesSeeder::class,
            ResultsSeeder::class,
        ]);
    }
}
