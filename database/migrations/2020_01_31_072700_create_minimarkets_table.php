<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinimarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minimarkets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->string('harga');
            $table->string('qty');            
            $table->text('deskripsi');
            $table->string('total');
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
        Schema::dropIfExists('minimarkets');
    }
}
