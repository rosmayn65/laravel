<?php

use Illuminate\Database\Seeder;

class TableSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['Nis'=>'0060518', 'Nama'=>'Ilham Ramdani', 'JenisKelamin'=>'Laki-Laki', 'Alamat'=>'Bojong Buah', 'TanggalLahir'=>'25 November 2002', 'Umur'=>17]
            ];

            // masukkan data ke database
            DB::table('siswa')->insert($siswa);
    }
}
