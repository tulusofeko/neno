<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $fillable=[
    	'referensi',
    	'nama_bank',
    	'tanggal',
    	'id_pegawai',
    ];
}
