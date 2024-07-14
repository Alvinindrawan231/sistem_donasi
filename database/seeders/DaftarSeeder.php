<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
=======
use App\Models\Daftar;
use Faker\Factory as Faker;
>>>>>>> dbfc43fc96157831bd47325129e5fba761974321

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('daftars')->insert([
            [
                'title' => 'Donation 1',
                'image' => 'image1.jpg',
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'telephone' => '1234567890',
                'address' => '123 Main St, Anytown, USA',
                'nominal' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Donation 2',
                'image' => 'image2.jpg',
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'telephone' => '0987654321',
                'address' => '456 Elm St, Othertown, USA',
                'nominal' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Donation 3',
                'image' => 'image3.jpg',
                'name' => 'Alice Smith',
                'email' => 'alicesmith@example.com',
                'telephone' => '1122334455',
                'address' => '789 Oak St, Anycity, USA',
                'nominal' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
=======
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
>>>>>>> dbfc43fc96157831bd47325129e5fba761974321
    }
}