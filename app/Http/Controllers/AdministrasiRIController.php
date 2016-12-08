<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AdministrasiRawatInap;

use App\rawat_inap;

use Session;

use Carbon\Carbon;

class AdministrasiRIController extends Controller
{
    	public function administrasiRI()
    	{
    		$administrasi_rawat_inaps = AdministrasiRawatInap::all();

    		return view('administrasiRawatInap', compact('administrasi_rawat_inaps'));
    		
    	}

        public function addAdministrasiRI(Request $request)
        {
            $input = ([
                'id_pembayaran_inap' => $request->id_pembayaran_inap,
                'id_rawat_inap' => $request->id_rawat_inap,
                'total_pembayaran' => $request->total_pembayaran,
                'keterangan_pembayaran'=> $request->keterangan_pembayaran
                ]);
            AdministrasiRawatInap::create($input);
            Session::flash('flash_message', 'data berhasil disimpan');
            return redirect('administrasiRawatInap');
        }

        public function tampilFormAdministrasi(){
            $rawat_inaps = RawatInap::all();
            return view('administrasiFormAdd',compact('rawat_inaps'));
        }

        public function editAdministrasi($id_pembayaran_inap){
            $dataAdministrasi = AdministrasiRawatInap::find($id_pembayaran_inap);

            $rawat_inaps = RawatInap::all();
            return view('administrasiFormEdit', compact('dataAdministrasi', 'rawat_inaps'));
        }

        public function updateAdministrasi(Request $request,$id_pembayaran_inap)
        {
                $data = AdministrasiRawatInap::find($id_pembayaran_inap);
                $data->update($request->all());
                Session::flash('flash_message', 'data berhasil disimpan');
                return redirect('administrasiRawatInap');
        }
	
}
