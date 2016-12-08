<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\rawat_inap;

use App\pelayanan;

use App\kamar;

use DB;

use Session;

use Carbon\Carbon;

class rawatinapController extends Controller
{
	public function rawatinap()
	{
		$rawats = rawat_inap::all();
		return view('pelayananrawatinap', compact('rawats'));
	}
	public function formrawatinap()
	{
		$pelayanans = pelayanan::whereNotExists(function($query){
			$query->select(DB::raw(1))
			->from('rawat_inaps')
			->whereRaw('rawat_inaps.id_pelayanan = pelayanans.id_pelayanan');
		})->where('rawat_inap','=','1')->get();
		$kamars = kamar::all();
		return view('formrawatinap', compact('pelayanans','kamars'));
	}
	public function addrawatinap(Request $request)
	{
		$input = ([
			'id_pelayanan' => $request->id_pelayanan,
			'id_kamar' => $request->id_kamar,
			'lama_menginap' => $request->lama_menginap,
			'Keterangan_Pelayanan' => $request->Keterangan_Pelayanan,
			]);
		rawat_inap::create($input);
		Session::flash('flash_message', 'data berhasil disimpan');
		return redirect('rawatinap');
	}
	public function editrawatinap($id_rawat_inap)
	{
		$rawatinaps = rawat_inap::find($id_rawat_inap);
		$pelayanans = pelayanan::all();
		$kamars = kamar::all();

		return view('editrawatinap', compact('rawatinaps', 'pelayanans','kamars'));
	}

	public function updaterawatinap(Request $request, rawat_inap $rawatinap, $id_rawat_inap)
	{
		$input = ([
			'id_kamar' => $request->id_kamar,
			'lama_menginap' => $request->lama_menginap,
			'Keterangan_Pelayanan' => $request->Keterangan_Pelayanan,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);

		$data = $rawatinap::where('id_rawat_inap',$id_rawat_inap)->update($input);
		Session::flash('flash_message', 'data berhasil disimpan');
		return redirect('rawatinap');
	}
}