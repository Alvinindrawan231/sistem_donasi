<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'image' => 'image1.jpg',
                'title' => 'Blog Title 1',
                'description' => 'Description for blog 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'image2.jpg',
                'title' => 'Blog Title 2',
                'description' => 'Description for blog 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'image3.jpg',
                'title' => 'Blog Title 3',
                'description' => 'Description for blog 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
