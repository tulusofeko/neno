<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominatif', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('referensi',32);
            $table->string('no_base')->unique();
            $table->string('nama');
            $table->string('stat')->nullable();
            $table->string('sample')->nullable();
            $table->string('outstanding')->nullable();
            $table->string('ppap_tb')->nullable();
            $table->string('kol_lsmk')->nullable();
            $table->string('kol_1_pilar')->nullable();
            $table->string('kol_3_pilar')->nullable();
            $table->string('sample2')->nullable();
            $table->string('kol_auditor')->nullable();
            $table->string('aydd_auditor')->nullable();
            $table->string('rekaman')->nullable();
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
        Schema::dropIfExists('nominatifs');
    }
}
