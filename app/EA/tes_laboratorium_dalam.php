<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tes_laboratorium_dalam extends Model
{
    protected $primaryKey = 'id_tes_laboran_dalam';
	protected $table = 'tes_laboratorium_dalams';
	protected $fillable = ['id_pelayanan','tanggal_tes','hasil_tes_lab']; 

	public function pelayanan(){
		return $this->belongsTo(Pelayanan::class,'id_pelayanan');
	}
}
