<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDF;

use App;

use App\pasien;

class cetak extends Controller
{
	public function cetak($id_pasien)
	{
		$dataPasien = pasien::where('id_pasien', $id_pasien)->get();           

		$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('cetakKartu', compact('dataPasien'));
		return $pdf->stream();
	}
}
