<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            ['brand' => 'Toyota', 'model' => 'Corolla', 'year' => 2020, 'color' => 'Blue'],
            ['brand' => 'Honda', 'model' => 'Civic', 'year' => 2021, 'color' => 'Red'],
            ['brand' => 'Ford', 'model' => 'Focus', 'year' => 2019, 'color' => 'Black'],
        ]);
    }
}
