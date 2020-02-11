<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liabilitas extends Model
{
    protected $table = 'liabilitas';
    protected $fillable=[
    	'referensi',
        'id_bank',
        'dana_utama',
        'dana_d1',
        'dana_k1',
        'dana_d2',
        'dana_k2',
        'dana_d3',
        'dana_k3',
        'liabilitas_bi_utama',
        'liabilitas_bi_d1',
        'liabilitas_bi_k1',
        'liabilitas_bi_d2',
        'liabilitas_bi_k2',
        'liabilitas_bi_d3',
        'liabilitas_bi_k3',
        'liabilitas_lain_utama',
        'liabilitas_lain_d1',
        'liabilitas_lain_k1',
        'liabilitas_lain_d2',
        'liabilitas_lain_k2',
        'liabilitas_lain_d3',
        'liabilitas_lain_k3',
        'suber_utama',
        'suber_d1',
        'suber_k1',
        'suber_d2',
        'suber_k2',
        'suber_d3',
        'suber_k3',
        'liabilitas_diterima_utama',
        'liabilitas_diterima_d1',
        'liabilitas_diterima_k1',
        'liabilitas_diterima_d2',
        'liabilitas_diterima_k2',
        'liabilitas_diterima_d3',
        'liabilitas_diterima_k3',
        'lain_utama',
        'lain_d1',
        'lain_k1',
        'lain_d2',
        'lain_k2',
        'lain_d3',
        'lain_k3',
        'rekaman',
    ];
}
