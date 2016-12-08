<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rawat_inap extends Model
{
    protected $primaryKey = 'id_rawat_inap';
    protected $table = 'rawat_inaps';
 	protected $fillable = ['id_pelayanan','id_kamar','lama_menginap','Keterangan_Pelayanan']; 

 	public function pelayanan(){
		return $this->belongsTo(Pelayanan::class,'id_pelayanan');
	}

	public function kamar(){
		return $this->belongsTo(kamar::class,'id_kamar');
	}
}
