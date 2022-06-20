<?php

use Illuminate\Database\Seeder;

class Mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for($i = 1; $i <= 50; $i++)
        {
        DB::table('mahasiswa')->insert([
        'nim' => $faker->nik(),
        'nama' => $faker->name(),
        'gender' => $faker->numberBetween(1,2),
        'jurusan' => 'kuliah',
        'bidang_minat' => $faker->jobTitle()
        ]);    
        }

    }
}
