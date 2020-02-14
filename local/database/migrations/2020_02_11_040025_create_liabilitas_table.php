<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiabilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liabilitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('referensi',32);
            $table->bigInteger('id_bank')->unsigned();
            $table->text('dana_utama')->nullable();
            $table->text('dana_d1')->nullable();
            $table->text('dana_k1')->nullable();
            $table->text('dana_d2')->nullable();
            $table->text('dana_k2')->nullable();
            $table->text('dana_d3')->nullable();
            $table->text('dana_k3')->nullable();
            $table->text('liabilitas_bi_utama')->nullable();
            $table->text('liabilitas_bi_d1')->nullable();
            $table->text('liabilitas_bi_k1')->nullable();
            $table->text('liabilitas_bi_d2')->nullable();
            $table->text('liabilitas_bi_k2')->nullable();
            $table->text('liabilitas_bi_d3')->nullable();
            $table->text('liabilitas_bi_k3')->nullable();
            $table->text('liabilitas_lain_utama')->nullable();
            $table->text('liabilitas_lain_d1')->nullable();
            $table->text('liabilitas_lain_k1')->nullable();
            $table->text('liabilitas_lain_d2')->nullable();
            $table->text('liabilitas_lain_k2')->nullable();
            $table->text('liabilitas_lain_d3')->nullable();
            $table->text('liabilitas_lain_k3')->nullable();
            $table->text('suberl_utama')->nullable();
            $table->text('suberl_d1')->nullable();
            $table->text('suberl_k1')->nullable();
            $table->text('suberl_d2')->nullable();
            $table->text('suberl_k2')->nullable();
            $table->text('suberl_d3')->nullable();
            $table->text('suberl_k3')->nullable();
            $table->text('liabilitas_diterima_utama')->nullable();
            $table->text('liabilitas_diterima_d1')->nullable();
            $table->text('liabilitas_diterima_k1')->nullable();
            $table->text('liabilitas_diterima_d2')->nullable();
            $table->text('liabilitas_diterima_k2')->nullable();
            $table->text('liabilitas_diterima_d3')->nullable();
            $table->text('liabilitas_diterima_k3')->nullable();
            $table->text('lainl_utama')->nullable();
            $table->text('lainl_d1')->nullable();
            $table->text('lainl_k1')->nullable();
            $table->text('lainl_d2')->nullable();
            $table->text('lainl_k2')->nullable();
            $table->text('lainl_d3')->nullable();
            $table->text('lainl_k3')->nullable();
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
        Schema::dropIfExists('liabilitas');
    }
}
