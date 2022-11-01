<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class jadwalsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        //
        $kelas = array('A','B','C','D','E','F');
        $dosen = Dosen::inRandomOrder()->first();
        $matkuls = MataKuliah::inRandomOrder()->first();
            foreach ($kelas as $value) {
                DB::table('jadwals')->insert(
                        [
                        'kode_matakuliah'=>$matkuls->kode_matakuliah,
                        'nidn'=>$dosen->nidn,
                        'kelas'=>$value,
                        'hari'=>$faker->randomElement(['Senin','Selasa','Rabu','Kamis','Jumát']),
                        'jam'=>$faker->randomElement(["08:00:00" , "10:30:00" , "13:00:00"]),
                        'created_at'=> \Carbon\Carbon::now(),
                        'updated_at'=> \Carbon\Carbon::now()
                        ]
                    );    
                }
    }
}
