<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class AdministrasiRawatInap extends Model
{ 
	protected $table = 'administrasi_rawat_inaps';
	protected $primaryKey = 'id_pembayaran_inap';
 	protected $fillable = ['id_pembayaran_inap','id_rawat_inap','total_pembayaran','keterangan_pembayaran']; 

 	public function rawatinap(){
    	return $this->belongsTo(rawat_inap::class,'id_rawat_inap');
    }

    
}
