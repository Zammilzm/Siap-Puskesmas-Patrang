<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
	protected $primaryKey ='id_poli';
	protected $table = 'polis';
	protected $fillable = ['id_poli','nama_poli']; 
}
