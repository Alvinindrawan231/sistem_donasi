<?php

namespace Database\Seeders;

use App\Models\Blog;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        for ($i = 0; $i < 10; $i++) {
            Blog::create([
                'image' => $faker->imageUrl(150, 150, true, 'Faker'),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
    }
}