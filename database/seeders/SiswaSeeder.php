<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            Siswa::create([
                'nama_siswa' => $faker->unique()->name(),
                'kelas' => $faker->randomElement(['1A', '1B', '1C', '2A', '2B', '2C', '3A', '3B', '3C']),
                'nis' => $faker->unique()->numberBetween(1000000000, 9999999999),
                'nisn' => $faker->unique()->numberBetween(1000000000, 9999999999),
                'alamat' => $faker->address(),
                'nama_ayah' => $faker->name(),
                'nama_ibu' => $faker->name()
            ]);
        }
    }
}
