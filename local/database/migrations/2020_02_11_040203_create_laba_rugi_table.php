<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabaRugiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laba_rugi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('referensi',32);
            $table->bigInteger('id_bank')->unsigned();
            $table->text('pendapatan_penyaluran_utama')->nullable();
            $table->text('pendapatan_penyaluran_d1')->nullable();
            $table->text('pendapatan_penyaluran_k1')->nullable();
            $table->text('pendapatan_penyaluran_d2')->nullable();
            $table->text('pendapatan_penyaluran_k2')->nullable();
            $table->text('pendapatan_penyaluran_d3')->nullable();
            $table->text('pendapatan_penyaluran_k3')->nullable();
            $table->text('bagi_hasil_utama')->nullable();
            $table->text('bagi_hasil_d1')->nullable();
            $table->text('bagi_hasil_k1')->nullable();
            $table->text('bagi_hasil_d2')->nullable();
            $table->text('bagi_hasil_k2')->nullable();
            $table->text('bagi_hasil_d3')->nullable();
            $table->text('bagi_hasil_k3')->nullable();
            $table->text('pendapatan_ops_utama')->nullable();
            $table->text('pendapatan_ops_d1')->nullable();
            $table->text('pendapatan_ops_k1')->nullable();
            $table->text('pendapatan_ops_d2')->nullable();
            $table->text('pendapatan_ops_k2')->nullable();
            $table->text('pendapatan_ops_d3')->nullable();
            $table->text('pendapatan_ops_k3')->nullable();
            $table->text('beban_ops_utama')->nullable();
            $table->text('beban_ops_d1')->nullable();
            $table->text('beban_ops_k1')->nullable();
            $table->text('beban_ops_d2')->nullable();
            $table->text('beban_ops_k2')->nullable();
            $table->text('beban_ops_d3')->nullable();
            $table->text('beban_ops_k3')->nullable();
            $table->text('pendapatan_nops_utama')->nullable();
            $table->text('pendapatan_nops_d1')->nullable();
            $table->text('pendapatan_nops_k1')->nullable();
            $table->text('pendapatan_nops_d2')->nullable();
            $table->text('pendapatan_nops_k2')->nullable();
            $table->text('pendapatan_nops_d3')->nullable();
            $table->text('pendapatan_nops_k3')->nullable();
            $table->text('beban_nops_utama')->nullable();
            $table->text('beban_nops_d1')->nullable();
            $table->text('beban_nops_k1')->nullable();
            $table->text('beban_nops_d2')->nullable();
            $table->text('beban_nops_k2')->nullable();
            $table->text('beban_nops_d3')->nullable();
            $table->text('beban_nops_k3')->nullable();
            $table->text('pajak_penghasilan_utama')->nullable();
            $table->text('pajak_penghasilan_d1')->nullable();
            $table->text('pajak_penghasilan_k1')->nullable();
            $table->text('pajak_penghasilan_d2')->nullable();
            $table->text('pajak_penghasilan_k2')->nullable();
            $table->text('pajak_penghasilan_d3')->nullable();
            $table->text('pajak_penghasilan_k3')->nullable();
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
        Schema::dropIfExists('laba_rugi');
    }
}
