<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGejalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gejala', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', '5');
            $table->string('gejala', '191');
        });

        Schema::create('gejala_penyakit', function (Blueprint $table) {
            $table->unsignedInteger('penyakit_id');
            $table->unsignedInteger('gejala_id');

            $table->foreign('penyakit_id')->references('id')->on('penyakit')->onDelete('cascade');
            $table->foreign('gejala_id')->references('id')->on('gejala')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gejala');
    }
}
