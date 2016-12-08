<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pelayanan;

use App\pegawai;

use DB;

use Session;

use App\pendaftaran;

use Carbon\Carbon;

class pelayananpemeriksaanController extends Controller
{
	public function pemeriksaan()
	{
		$periksapasien = pelayanan::all();
		return view('pelayananpemeriksaan', compact('periksapasien'));
	}
	public function formpemeriksaan()
	{
		$pendaftarans = pendaftaran::whereNotExists(function($query){
			$query->select(DB::raw(1))
			->from('pelayanans')
			->whereRaw('pelayanans.id_pendaftaran = pendaftarans.id_pendaftaran');
		})->get();
		$pegawais = pegawai::all();
		return view('tambahpemeriksaan', compact('pendaftarans','pegawais'));
	}
	public function addpemeriksaan(Request $request)
	{
		$input = ([
			'id_pendaftaran' => $request->id_pendaftaran,
			'keluhan' => $request->keluhan,
			'diagnosa_penyakit' => $request->diagnosa_penyakit,
			'id_pegawai' => $request->id_pegawai,
			'saran_dokter' => $request->saran_dokter,
			'rawat_inap' => $request->rawat_inap,
			'rekam_medis' => $request->rekam_medis,
			'rujukan' => $request->rujukan,
			'resep' => $request->resep,
			'uji_lab' => $request->uji_lab,
			]);
		pelayanan::create($input);
		Session::flash('flash_message', 'data berhasil disimpan');
		return redirect('pemeriksaan');
	}

	public function editPemeriksaan($id_pelayanan)
	{
		$dataPelayanans = pelayanan::find($id_pelayanan);
		$pegawais = pegawai::all();
		$pendaftarans = pendaftaran::all();

		return view('editPemeriksaan', compact('dataPelayanans', 'pegawais', 'pendaftarans'));
	}
	public function updatepemeriksaan(Request $request, pelayanan $pelayanan, $id_pelayanan)
	{
		$input = ([

			'keluhan' => $request->keluhan,
			'diagnosa_penyakit' => $request->diagnosa_penyakit,
			'id_pegawai' => $request->id_pegawai,
			'saran_dokter' => $request->saran_dokter,
			'rawat_inap' => $request->rawat_inap,
			'rekam_medis' => $request->rekam_medis,
			'rujukan' => $request->rujukan,
			'resep' => $request->resep,
			'uji_lab' => $request->uji_lab,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);

		$data = $pelayanan::where('id_pelayanan',$id_pelayanan)->update($input);
		Session::flash('flash_message', 'data berhasil disimpan');
		return redirect('pemeriksaan');
	}
}