<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BPJS extends Model
{
	protected $table = 'bpjses';
	protected $primaryKey = 'id_bpjs';
    protected $fillable = ['id_bpjs','nama_bpjs','status','tanggal_pembuatan']; 

}
