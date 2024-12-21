<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('biodatas')->insert([
            [
                'first_name' => 'Devi',
                'last_name' => 'Sri',
                'gender' => 'female',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Baginda',
                'last_name' => 'Sarip',
                'gender' => 'male',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
