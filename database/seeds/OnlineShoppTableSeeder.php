<?php

use Illuminate\Database\Seeder;

class OnlineShoppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $onlineShop = [
            ['namaProduk'=>'Acid Snow Pants', 'jenisProduk'=>'Pants', 'bahanProduk'=>'Jeans', 'varianWarna'=>'Dark Blue', 'ukuranProduk'=>'All Size Fit L', 'kuantitasProduk'=>'1', 'hargaProduk'=>'95000'],
            ['namaProduk'=>'Zenna Overall', 'jenisProduk'=>'Overall', 'bahanProduk'=>'Jeans', 'varianWarna'=>'Light Blue', 'ukuranProduk'=>'All Size Fit L', 'kuantitasProduk'=>'1', 'hargaProduk'=>'150000'],
            ['namaProduk'=>'Outer Desy', 'jenisProduk'=>'Outer', 'bahanProduk'=>'Mosscrepe', 'varianWarna'=>'Mustard', 'ukuranProduk'=>'All Size Fit L', 'kuantitasProduk'=>'1', 'hargaProduk'=>'35000'],
            ['namaProduk'=>'Khimar Amira', 'jenisProduk'=>'Hijab', 'bahanProduk'=>'Diamond Italic', 'varianWarna'=>'Black', 'ukuranProduk'=>'One Size', 'kuantitasProduk'=>'1', 'hargaProduk'=>'25000'],
            ['namaProduk'=>'Hijab Paris', 'jenisProduk'=>'Hijab', 'bahanProduk'=>'Paris', 'varianWarna'=>'Choco', 'ukuranProduk'=>'One Size', 'kuantitasProduk'=>'1', 'hargaProduk'=>'25000'],
            ['namaProduk'=>'Hijab Voal Lasercut', 'jenisProduk'=>'Hijab', 'bahanProduk'=>'Voal Lasercut', 'varianWarna'=>'Dusty Pink', 'ukuranProduk'=>'One Size', 'kuantitasProduk'=>'1', 'hargaProduk'=>'55000'],
            ['namaProduk'=>'Sendal Tali Lurus', 'jenisProduk'=>'Sandal', 'bahanProduk'=>'Karet Tebal', 'varianWarna'=>'Maroon', 'ukuranProduk'=>'39', 'kuantitasProduk'=>'1', 'hargaProduk'=>'65000'],
            ['namaProduk'=>'Sweater Bella Tebal', 'jenisProduk'=>'Sweater', 'bahanProduk'=>'Rajut Tebal', 'varianWarna'=>'Army', 'ukuranProduk'=>'All Size Fit L', 'kuantitasProduk'=>'1', 'hargaProduk'=>'95000'],
            ['namaProduk'=>'Sprei Little Pony', 'jenisProduk'=>'Sprei', 'bahanProduk'=>'Katun', 'varianWarna'=>'Little Pony', 'ukuranProduk'=>'250*89*240', 'kuantitasProduk'=>'1', 'hargaProduk'=>'105000'],
            ['namaProduk'=>'Ciput Rajut', 'jenisProduk'=>'Ciput', 'bahanProduk'=>'Rajut', 'varianWarna'=>'Grey', 'ukuranProduk'=>'One Size', 'kuantitasProduk'=>'1', 'hargaProduk'=>'10000']

            ];

            // masukkan data ke database
            DB::table('onlineshop')->insert($onlineShop);
    }
}
