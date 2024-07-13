<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('donasis')->insert([
            [
                'title' => 'Donation 1',
                'description' => 'Description for donation 1',
                'image' => 'image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Donation 2',
                'description' => 'Description for donation 2',
                'image' => 'image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Donation 3',
                'description' => 'Description for donation 3',
                'image' => 'image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
