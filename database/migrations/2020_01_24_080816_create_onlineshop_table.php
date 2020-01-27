<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineshop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaProduk');
            $table->string('jenisProduk');
            $table->string('bahanProduk');
            $table->string('varianWarna');
            $table->string('ukuranProduk');
            $table->string('kuantitasProduk');
            $table->string('hargaProduk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onlineshop');
    }
}
