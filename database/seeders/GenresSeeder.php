<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->truncate();

        DB::table('genres')->insert([
            ['name' => 'RPG2', 'created_at' => Carbon::now(), 'updated_ad'=>Carbon::now()],
            ['name' => 'Adventure', 'created_at' => Carbon::now(), 'updated_ad'=>Carbon::now()],
            ['name' => 'FPS', 'created_at' => Carbon::now(), 'updated_ad'=>Carbon::now()],
            ['name' => 'Sport', 'created_at' => Carbon::now(), 'updated_ad'=>Carbon::now()],
            ['name' => 'Sim', 'created_at' => Carbon::now(), 'updated_ad'=>Carbon::now()]
        ]);
    }
}
