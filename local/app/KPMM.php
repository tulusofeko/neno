<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KPMM extends Model
{
    protected $table = 'kpmm';
    protected $fillable=[
    	'referensi',
        'id_bank',
        'modal_inti_utama',
        'modal_inti_d1',
        'modal_inti_k1',
        'modal_inti_d2',
        'modal_inti_k2',
        'modal_inti_d3',
        'modal_inti_k3',
        'modal_pelengkap_utama',
        'modal_pelengkap_d1',
        'modal_pelengkap_k1',
        'modal_pelengkap_d2',
        'modal_pelengkap_k2',
        'modal_pelengkap_d3',
        'modal_pelengkap_k3',
        'total_atmr_utama',
        'total_atmr_d1',
        'total_atmr_k1',
        'total_atmr_d2',
        'total_atmr_k2',
        'total_atmr_d3',
        'total_atmr_k3',
        'npf_utama',
        'npf_d1',
        'npf_k1',
        'npf_d2',
        'npf_k2',
        'npf_d3',
        'npf_k3',
        'ckpn_utama',
        'cpkn_d1',
        'ckpn_k1',
        'ckpn_d2',
        'ckpn_k2',
        'ckpn_d3',
        'ckpn_k3',
        'npf_gross_utama',
        'npf_gross_d1',
        'npf_gross_k1',
        'npf_gross_d2',
        'npf_gross_k2',
        'npf_gross_d3',
        'npf_gross_k3',
        'npf_nett_utama',
        'npf_nett_d1',
        'npf_nett_k1',
        'npf_nett_d2',
        'npf_nett_k2',
        'npf_nett_d3',
        'npf_nett_k3',
        'rekaman',
    ];
}
