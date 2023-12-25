<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker as Faker;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
         $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('kontak')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'nohp' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
    }
}
