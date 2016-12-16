<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pelayanan;

use App\resep_obat;

use DB;

use Session;

use Carbon\Carbon;

class resepapotekerController extends Controller
{
	public function resep()
	{
		$reseps = resep_obat::all();
		return view('pengelolaanobatapoteker', compact('reseps'));
	}

	public function formresep()
	{
		$reseps = resep_obat::all();
		return view('formpengelolaanresepobatapoteker', compact('reseps'));
	}

	public function pengelolaanresep($id_resep)
	{
		$datareseps = resep_obat::find($id_resep);
		$pelayanans = pelayanan::all();

		return view('formpengelolaanresepobatapoteker', compact('datareseps', 'pelayanans'));
	}
	
	public function simpanresep(Request $request, resep_obat $resep, $id_resep)
	{
		$input = ([
			'resep_obat' => $request->resep_obat,
			'resep_tersedia' => $request->resep_tersedia,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);

		$data = $resep::where('id_resep',$id_resep)->update($input);
		return redirect('resepapoteker');
	}
}