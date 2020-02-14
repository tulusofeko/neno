<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nominatif extends Model
{
    protected $table = 'nominatif';
    protected $fillable=[
    		'referensi',
            'no_base',
            'nama',
            'stat',
            'sample',
            'outstanding',
            'ppap_tb',
            'kol_lsmk',
            'kol_1_pilar',
            'kol_3_pilar',
            'sample2',
            'kol_auditor',
            'aydd_auditor',
            'rekaman',
    ];
}
