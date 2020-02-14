<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKPMMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpmm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('referensi',32);
            $table->bigInteger('id_bank')->unsigned();
            $table->text('modal_inti_utama')->nullable();
            $table->text('modal_inti_d1')->nullable();
            $table->text('modal_inti_k1')->nullable();
            $table->text('modal_inti_d2')->nullable();
            $table->text('modal_inti_k2')->nullable();
            $table->text('modal_inti_d3')->nullable();
            $table->text('modal_inti_k3')->nullable();
            $table->text('modal_pelengkap_utama')->nullable();
            $table->text('modal_pelengkap_d1')->nullable();
            $table->text('modal_pelengkap_k1')->nullable();
            $table->text('modal_pelengkap_d2')->nullable();
            $table->text('modal_pelengkap_k2')->nullable();
            $table->text('modal_pelengkap_d3')->nullable();
            $table->text('modal_pelengkap_k3')->nullable();
            $table->text('total_atmr_utama')->nullable();
            $table->text('total_atmr_d1')->nullable();
            $table->text('total_atmr_k1')->nullable();
            $table->text('total_atmr_d2')->nullable();
            $table->text('total_atmr_k2')->nullable();
            $table->text('total_atmr_d3')->nullable();
            $table->text('total_atmr_k3')->nullable();
            $table->text('npf_utama')->nullable();
            $table->text('npf_d1')->nullable();
            $table->text('npf_k1')->nullable();
            $table->text('npf_d2')->nullable();
            $table->text('npf_k2')->nullable();
            $table->text('npf_d3')->nullable();
            $table->text('npf_k3')->nullable();
            $table->text('ckpn_utama')->nullable();
            $table->text('cpkn_d1')->nullable();
            $table->text('ckpn_k1')->nullable();
            $table->text('ckpn_d2')->nullable();
            $table->text('ckpn_k2')->nullable();
            $table->text('ckpn_d3')->nullable();
            $table->text('ckpn_k3')->nullable();
            $table->text('npf_gross_utama')->nullable();
            $table->text('npf_gross_d1')->nullable();
            $table->text('npf_gross_k1')->nullable();
            $table->text('npf_gross_d2')->nullable();
            $table->text('npf_gross_k2')->nullable();
            $table->text('npf_gross_d3')->nullable();
            $table->text('npf_gross_k3')->nullable();
            $table->text('npf_nett_utama')->nullable();
            $table->text('npf_nett_d1')->nullable();
            $table->text('npf_nett_k1')->nullable();
            $table->text('npf_nett_d2')->nullable();
            $table->text('npf_nett_k2')->nullable();
            $table->text('npf_nett_d3')->nullable();
            $table->text('npf_nett_k3')->nullable();
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
        Schema::dropIfExists('kpmm');
    }
}
