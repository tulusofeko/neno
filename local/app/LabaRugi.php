<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabaRugi extends Model
{
    protected $table = 'laba_rugi';
    protected $fillable=[
    	'referensi',
        'id_bank',
        'pendapatan_penyaluran_utama',
        'pendapatan_penyaluran_d1',
        'pendapatan_penyaluran_k1',
        'pendapatan_penyaluran_d2',
        'pendapatan_penyaluran_k2',
        'pendapatan_penyaluran_d3',
        'pendapatan_penyaluran_k3',
        'bagi_hasil_utama',
        'bagi_hasil_d1',
        'bagi_hasil_k1',
        'bagi_hasil_d2',
        'bagi_hasil_k2',
        'bagi_hasil_d3',
        'bagi_hasil_k3',
        'pendapatan_ops_utama',
        'pendapatan_ops_d1',
        'pendapatan_ops_k1',
        'pendapatan_ops_d2',
        'pendapatan_ops_k2',
        'pendapatan_ops_d3',
        'pendapatan_ops_k3',
        'beban_ops_utama',
        'beban_ops_d1',
        'beban_ops_k1',
        'beban_ops_d2',
        'beban_ops_k2',
        'beban_ops_d3',
        'beban_ops_k3',
        'pendapatan_nops_utama',
        'pendapatan_nops_d1',
        'pendapatan_nops_k1',
        'pendapatan_nops_d2',
        'pendapatan_nops_k2',
        'pendapatan_nops_d3',
        'pendapatan_nops_k3',
        'beban_nops_utama',
        'beban_nops_d1',
        'beban_nops_k1',
        'beban_nops_d2',
        'beban_nops_k2',
        'beban_nops_d3',
        'beban_nops_k3',
        'pajak_penghasilan_utama',
        'pajak_penghasilan_d1',
        'pajak_penghasilan_k1',
        'pajak_penghasilan_d2',
        'pajak_penghasilan_k2',
        'pajak_penghasilan_d3',
        'pajak_penghasilan_k3',
        'rekaman',
    ];
}
