<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('referensi',32);
            $table->string('nama_bank');
            $table->date('tanggal');
            $table->bigInteger('id_pegawai')->unsigned();
            $table->timestamps();
        });

        Schema::table('aset', function (Blueprint $table) {
            $table->foreign('id_bank')
                ->references('id')
                ->on('bank')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('liabilitas', function (Blueprint $table) {
            $table->foreign('id_bank')
                ->references('id')
                ->on('bank')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('equitas', function (Blueprint $table) {
            $table->foreign('id_bank')
                ->references('id')
                ->on('bank')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('laba_rugi', function (Blueprint $table) {
            $table->foreign('id_bank')
                ->references('id')
                ->on('bank')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('kpmm', function (Blueprint $table) {
            $table->foreign('id_bank')
                ->references('id')
                ->on('bank')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aset', function (Blueprint $table) {
            $table->dropForeign('aset_id_bank_foreign');
        });
        Schema::table('liabilitas', function (Blueprint $table) {
            $table->dropForeign('liabilitas_id_bank_foreign');
        });
        Schema::table('equitas', function (Blueprint $table) {
            $table->dropForeign('equitas_id_bank_foreign');
        });
        Schema::table('laba_rugi', function (Blueprint $table) {
            $table->dropForeign('laba_rugi_id_bank_foreign');
        });
        Schema::table('kpmm', function (Blueprint $table) {
            $table->dropForeign('kpmm_id_bank_foreign');
        });
        Schema::dropIfExists('banks');
    }
}
