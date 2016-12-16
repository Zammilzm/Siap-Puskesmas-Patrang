<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelayanan extends Model
{
    protected $primaryKey = 'id_pelayanan';
    protected $table = 'pelayanans';
 	protected $fillable = ['id_pendaftaran','keluhan','diagnosa_penyakit','id_pegawai','saran_dokter','rawat_inap','rekam_medis','rujukan','resep','uji_lab']; 

 	public function pendaftaran(){
		return $this->belongsTo(pendaftaran::class,'id_pendaftaran');
	}

	public function pegawai(){
		return $this->belongsTo(pegawai::class,'id_pegawai');
	}
}
