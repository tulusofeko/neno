<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('referensi',32);
            $table->bigInteger('id_bank')->unsigned();
            $table->text('modal_disetor_utama')->nullable();
            $table->text('modal_disetor_d1')->nullable();
            $table->text('modal_disetor_k1')->nullable();
            $table->text('modal_disetor_d2')->nullable();
            $table->text('modal_disetor_k2')->nullable();
            $table->text('modal_disetor_d3')->nullable();
            $table->text('modal_disetor_k3')->nullable();
            $table->text('modal_pinjaman_utama')->nullable();
            $table->text('modal_pinjaman_d1')->nullable();
            $table->text('modal_pinjaman_k1')->nullable();
            $table->text('modal_pinjaman_d2')->nullable();
            $table->text('modal_pinjaman_k2')->nullable();
            $table->text('modal_pinjaman_d3')->nullable();
            $table->text('modal_pinjaman_k3')->nullable();
            $table->text('perkiraan_utama')->nullable();
            $table->text('perkiraan_d1')->nullable();
            $table->text('perkiraan_k1')->nullable();
            $table->text('perkiraan_d2')->nullable();
            $table->text('perkiraan_k2')->nullable();
            $table->text('perkiraan_d3')->nullable();
            $table->text('perkiraan_k3')->nullable();
            $table->text('selisih_utama')->nullable();
            $table->text('selisih_d1')->nullable();
            $table->text('selisih_k1')->nullable();
            $table->text('selisih_d2')->nullable();
            $table->text('selisih_k2')->nullable();
            $table->text('selisih_d3')->nullable();
            $table->text('selisih_k3')->nullable();
            $table->text('cadangan_utama')->nullable();
            $table->text('cadangan_d1')->nullable();
            $table->text('cadangan_k1')->nullable();
            $table->text('cadangan_d2')->nullable();
            $table->text('cadangan_k2')->nullable();
            $table->text('cadangan_d3')->nullable();
            $table->text('cadangan_k3')->nullable();
            $table->text('laba_sebelum_utama')->nullable();
            $table->text('laba_sebelum_d1')->nullable();
            $table->text('laba_sebelum_k1')->nullable();
            $table->text('laba_sebelum_d2')->nullable();
            $table->text('laba_sebelum_k2')->nullable();
            $table->text('laba_sebelum_d3')->nullable();
            $table->text('laba_sebelum_k3')->nullable();
            $table->text('laba_berjalan_utama')->nullable();
            $table->text('laba_berjalan_d1')->nullable();
            $table->text('laba_berjalan_k1')->nullable();
            $table->text('laba_berjalan_d2')->nullable();
            $table->text('laba_berjalan_k2')->nullable();
            $table->text('laba_berjalan_d3')->nullable();
            $table->text('laba_berjalan_k3')->nullable();
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
        Schema::dropIfExists('equitas');
    }
}
