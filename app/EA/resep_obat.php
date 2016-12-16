<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resep_obat extends Model
{
    protected $primaryKey = 'id_resep';
	protected $table = 'resep_obats';
	protected $fillable = ['id_pelayanan','resep_obat','resep_tersedia']; 

	public function pelayanan(){
		return $this->belongsTo(Pelayanan::class,'id_pelayanan');
	}
}
