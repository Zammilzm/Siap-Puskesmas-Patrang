<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
   protected $primaryKey = 'id_pasien';
	protected $table = 'pasiens';
    protected $fillable = ['no_ktp','no_kk','nama_pasien','alamat','tanggal_lahir','golongan_darah','umur'];
}
