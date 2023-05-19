<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for($j = 0; $j<10; $j++) {
            $games = [];
            for ($i = 0; $i < 100; $i++) {
                $games[] = [
                    'title' => $faker->words($faker->numberBetween(1, 3), true),
                    'description' => $faker->sentence,
                    'publisher' => $faker->randomElement(['Ateri', 'Blizard', 'Ubisoft', 'EA Games']),
                    'genre_id' => $faker->numberBetween(1, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            DB::table('games')->insert($games);
        }
    }
}
