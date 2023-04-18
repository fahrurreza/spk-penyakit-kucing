<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rule', '10');
            $table->float('nilai', '10');
        });

        Schema::create('rule_gejala', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rule_id');
            $table->string('gejala_kode', '10');

            $table->foreign('rule_id')->references('id')->on('rule')->onDelete('cascade');
        });

        Schema::create('rule_penyakit', function (Blueprint $table) {
            $table->unsignedInteger('rule_id');
            $table->unsignedInteger('penyakit_id');

            $table->foreign('rule_id')->references('id')->on('rule_gejala')->onDelete('cascade');
            $table->foreign('penyakit_id')->references('id')->on('penyakit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rule');
    }
}
