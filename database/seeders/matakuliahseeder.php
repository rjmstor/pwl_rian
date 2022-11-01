<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class matakuliahseeder extends Seeder
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
            $matkul = array('Pemrograman Web Lanjut','Pemrograman Dasar','Piranti Bergerak','Jaringan Komputer','Interaksi Manusia & Komputer');
            foreach ($matkul as $value) {
                DB::table('matakuliah')->insert(
                        [
                        'kode_matakuliah'=>rand(12340000,12350000),
                        'nama_matakuliah'=>$value,
                        'sks'=>$faker->randomELement(['2','3']),
                        'created_at'=> \Carbon\Carbon::now(),
                        'updated_at'=> \Carbon\Carbon::now()
                        ]
                    );    
                }
    }
}
