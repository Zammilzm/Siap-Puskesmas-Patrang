<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $primaryKey = 'id_pegawai';
	protected $table = 'pegawais';
    protected $fillable = ['nama_pegawai','status_pegawai','no_kk','no_ktp','alamat','tanggal_lahir','golongan_darah','umur','lulusan','asal_pendidikan']; 
}
