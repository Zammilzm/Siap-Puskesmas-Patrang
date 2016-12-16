<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rujukan extends Model
{
	protected $primaryKey = 'id_rujukan';
	protected $table = 'rujukans';
	protected $fillable = ['id_pelayanan','tanggal_rujukan','keterangan','tempat_rujukan','status_rujukan']; 

	public function pelayanan(){
		return $this->belongsTo(Pelayanan::class,'id_pelayanan');
	}
}
