<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equitas extends Model
{
    protected $table = 'equitas';
    protected $fillable=[
    	'referensi',
        'id_bank',
        'modal_disetor_utama',
        'modal_disetor_d1',
        'modal_disetor_k1',
        'modal_disetor_d2',
        'modal_disetor_k2',
        'modal_disetor_d3',
        'modal_disetor_k3',
        'modal_pinjaman_utama',
        'modal_pinjaman_d1',
        'modal_pinjaman_k1',
        'modal_pinjaman_d2',
        'modal_pinjaman_k2',
        'modal_pinjaman_d3',
        'modal_pinjaman_k3',
        'perkiraan_utama',
        'perkiraan_d1',
        'perkiraan_k1',
        'perkiraan_d2',
        'perkiraan_k2',
        'perkiraan_d3',
        'perkiraan_k3',
        'selisih_utama',
        'selisih_d1',
        'selisih_k1',
        'selisih_d2',
        'selisih_k2',
        'selisih_d3',
        'selisih_k3',
        'cadangan_utama',
        'cadangan_d1',
        'cadangan_k1',
        'cadangan_d2',
        'cadangan_k2',
        'cadangan_d3',
        'cadangan_k3',
        'laba_sebelum_utama',
        'laba_sebelum_d1',
        'laba_sebelum_k1',
        'laba_sebelum_d2',
        'laba_sebelum_k2',
        'laba_sebelum_d3',
        'laba_sebelum_k3',
        'laba_berjalan_utama',
        'laba_berjalan_d1',
        'laba_berjalan_k1',
        'laba_berjalan_d2',
        'laba_berjalan_k2',
        'laba_berjalan_d3',
        'laba_berjalan_k3',
        'rekaman',
    ];
}
