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
        'suberl_utama',
        'suberl_d1',
        'suberl_k1',
        'suberl_d2',
        'suberl_k2',
        'suberl_d3',
        'suberl_k3',
        'liabilitas_diterima_utama',
        'liabilitas_diterima_d1',
        'liabilitas_diterima_k1',
        'liabilitas_diterima_d2',
        'liabilitas_diterima_k2',
        'liabilitas_diterima_d3',
        'liabilitas_diterima_k3',
        'lainl_utama',
        'lainl_d1',
        'lainl_k1',
        'lainl_d2',
        'lainl_k2',
        'lainl_d3',
        'lainl_k3',
        'rekaman',
    ];
}
