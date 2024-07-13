<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            [
                'title' => 'Home Title 1',
                'description' => 'Description for home 1',
                'image' => 'image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Home Title 2',
                'description' => 'Description for home 2',
                'image' => 'image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Home Title 3',
                'description' => 'Description for home 3',
                'image' => 'image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
