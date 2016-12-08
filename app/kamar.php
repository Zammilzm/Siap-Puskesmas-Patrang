<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $primaryKey = 'id_kamar';
    protected $table = 'kamars';
 	protected $fillable = ['id_pegawai','nama_kamar','jenis_kamar','no_kamar','tarif_kamar']; 

	public function pegawai(){
		return $this->belongsTo(pegawai::class,'id_pegawai');
	}
}
