<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
	protected $primaryKey = 'id_pendaftaran';
	protected $table = 'pendaftarans';
    protected $fillable = ['id_pasien','id_poli','status',
    'tanggal_periksa']; 

    public function pasien(){
    	return $this->belongsTo(Pasien::class,'id_pasien');
    }
    public function poli (){
    	return $this->belongsTo(Poli::class,'id_poli');
    }

    
   
    
}
