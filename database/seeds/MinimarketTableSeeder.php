<?php

use Illuminate\Database\Seeder;

class MinimarketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code'=>'1604', 'nama_barang'=>'pilus garuda', 'jenis_barang'=>'cemilan', 'harga'=>8500, 'qty'=>'1', 'deskripsi'=>'exp 20-11-2022', 'total'=>8500],
            ['code'=>'1304','nama_barang'=>'mogu-mogu kelapa', 'jenis_barang'=>'minuman', 'harga'=>8000, 'qty'=>'2', 'deskripsi'=>'exp 06-08-2020', 'total'=>16000],
            ['code'=>'2511','nama_barang'=>'moko-moko lipstick', 'jenis_barang'=>'kosmetik', 'harga'=>20000, 'qty'=>'4', 'deskripsi'=>'exp 07-12-2021', 'total'=>80000],
            ['code'=>'0605','nama_barang'=>'minyak sania 2 liter', 'jenis_barang'=>'dapur', 'harga'=>24000, 'qty'=>'3', 'deskripsi'=>'exp 23-05-2024', 'total'=>72000],
            ['code'=>'7868','nama_barang'=>'tas belanja', 'jenis_barang'=>'dapur', 'harga'=>24900, 'qty'=>'1', 'deskripsi'=>'bahan kanvas tebal', 'total'=>24900],
            ['code'=>'8765','nama_barang'=>'susu ultra full cream 1 liter', 'jenis_barang'=>'minuman', 'harga'=>24000, 'qty'=>'3', 'deskripsi'=>'exp 23-04-2024', 'total'=>72000],
            ['code'=>'4345','nama_barang'=>'mie gaga cabe ijo', 'jenis_barang'=>'mie instan', 'harga'=>4000, 'qty'=>'4', 'deskripsi'=>'exp 16-05-2024', 'total'=>16000],
            ['code'=>'7657','nama_barang'=>'samyang cheese', 'jenis_barang'=>'mie instan', 'harga'=>15000, 'qty'=>'3', 'deskripsi'=>'exp 01-05-2024', 'total'=>45000],
            ['code'=>'0977','nama_barang'=>'pop mie ayam bawang', 'jenis_barang'=>'mie instan', 'harga'=>7500, 'qty'=>'1', 'deskripsi'=>'exp 30-05-2024', 'total'=>7500],
            ['code'=>'5657','nama_barang'=>'sariroti sandwich keju', 'jenis_barang'=>'makanan', 'harga'=>5500, 'qty'=>'1', 'deskripsi'=>'exp 18-05-2020', 'total'=>5500]
        ];

            // masukkan data ke database
            DB::table('minimarkets')->insert($data);
    }
}
