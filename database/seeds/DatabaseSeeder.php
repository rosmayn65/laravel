<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     Post::class,
        //     SiswaSeeder::class
        // ]);
        //factory(App\Tabungan::class, 100)->create();
        //factory(App\Customerr::class, 1000)->create();
        $this->call(MinimarketTableSeeder::class);

    }
}