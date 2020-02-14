<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorRekon extends Model
{
    protected $table = 'error_rekonpeg';
    protected $fillable=[
    	'nama_pegawai',
    	'keterangan',
    	'tipe',
    ];
}
