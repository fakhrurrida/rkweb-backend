<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\PpeReq;

class ppeReqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            PpeReq::create([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'jenis_apd' => $faker->numberBetween(4,15),
                'masa_expiry_apd' => $faker->date('Y-m-d'),
                'no_wr' => $faker->numberBetween(16678,51293),
            ]);
        }
    }
}
