<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tentang_kamis')->insert([
            [
                'image' => 'image1.jpg',
                'description' => 'Description for about us 1',
                'rekening' => 123456789,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'image2.jpg',
                'description' => 'Description for about us 2',
                'rekening' => 987654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'image3.jpg',
                'description' => 'Description for about us 3',
                'rekening' => 112233445,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
