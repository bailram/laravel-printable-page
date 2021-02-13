<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 20; $i++) { 
            // insert data to pegawas table using faker
            DB::table('pegawais')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'alamat' => $faker->address,
                'telepon' => $faker->phoneNumber,
                'pekerjaan' => 'karyawan'
            ]);
        }
    }
}
