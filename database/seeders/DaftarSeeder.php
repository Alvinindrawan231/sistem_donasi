<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Daftar;
use Faker\Factory as Faker;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Daftar::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'telephone' => $faker->phoneNumber,
                'address' => $faker->address,
                'nominal' => $faker->numberBetween(100, 1000)
            ]);
        }
    }
}