<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pelayanan;

use App\resep_obat;

use DB;

use Session;

use Carbon\Carbon;

class resepobatController extends Controller
{
	public function resep()
	{
		$reseps = resep_obat::all();
		return view('pengelolaanresepobat', compact('reseps'));
	}

	public function formresep()
	{
		$pelayanans = pelayanan::whereNotExists(function($query){
			$query->select(DB::raw(1))
			->from('resep_obats')
			->whereRaw('resep_obats.id_pelayanan = pelayanans.id_pelayanan');
		})->where('resep','=','1')->get();
		return view('formpengelolaanresepobat', compact('pelayanans'));
	}

	public function addresepobat(Request $request)
	{
		$input = ([
			'id_pelayanan' => $request->id_pelayanan,
			'resep_obat' => $request->resep_obat,
			]);
		resep_obat::create($input);
		Session::flash('flash_message', 'data berhasil disimpan');
		return redirect('resep');
	}

	public function editresep($id_resep)
	{
		$datareseps = resep_obat::find($id_resep);
		$pelayanans = pelayanan::all();

		return view('editpengelolaanresepobat', compact('datareseps', 'pelayanans'));
	}
	
	public function updateresep(Request $request, resep_obat $resep, $id_resep)
	{
		$input = ([
			'resep_obat' => $request->resep_obat,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);

		$data = $resep::where('id_resep',$id_resep)->update($input);
		return redirect('resep');
	}
}