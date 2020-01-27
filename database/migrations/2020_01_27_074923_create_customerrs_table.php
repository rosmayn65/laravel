<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->text('address');
            $table->string('contact number');
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
        Schema::dropIfExists('customerrs');
    }
}
