<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tes_laboratorium_dalam;

use App\pelayanan;

use Carbon\Carbon;

use DB;

class tes_lab_dalamController extends Controller
{
	public function hasiltes()
	{
		$hasilteslabs = tes_laboratorium_dalam::all();
		return view('lihatteslabdalam', compact('hasilteslabs'));
	}
	public function teslaboratorium()
	{
		$teslabs = tes_laboratorium_dalam::all();
		return view('teslaboratorium', compact('teslabs'));
	}

	public function formteslab()
	{
		$pelayanans = pelayanan::whereNotExists(function($query){
			$query->select(DB::raw(1))
			->from('tes_laboratorium_dalams')
			->whereRaw('tes_laboratorium_dalams.id_pelayanan = pelayanans.id_pelayanan');
		})->where('uji_lab','=','1')->get();
		return view('formteslaboratorium', compact('pelayanans'));
	}
	public function addteslab(Request $request)
	{
		$input = ([
			'id_pelayanan' => $request->id_pelayanan,
			'tanggal_tes' => $request->tanggal_tes,
			'hemoglobin' => $request->hemoglobin,
			'leukosit' => $request->leukosit,
			'trombosit' => $request->trombosit,
			'hematoplit' => $request->hematoplit,
			'darah_gda' => $request->darah_gda,
			]);
		// echo "<pre>";
		// print_r($input);
		tes_laboratorium_dalam::create($input);
		Session::flash('flash_message', 'data berhasil disimpan');
		return redirect('teslaboratorium');
	}
	public function editteslab($id_tes_laboran_dalam)
	{
		$datateslabs = tes_laboratorium_dalam::find($id_tes_laboran_dalam);
		$pelayanans = pelayanan::all();

		return view('editteslaboratorium', compact('datateslabs', 'pelayanans'));
	}
	public function updateteslab(Request $request, tes_laboratorium_dalam $teslab, $id)
	{
		$input = ([
			'tanggal_tes' => $request->tanggal_tes,
			'hemoglobin' => $request->hemoglobin,
			'leukosit' => $request->leukosit,
			'trombosit' => $request->trombosit,
			'hematoplit' => $request->hematoplit,
			'darah_gda' => $request->darah_gda,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);

		$data = $teslab::where('id_tes_laboran_dalam',$id)->update($input);
		return redirect('teslaboratorium');
	}
}