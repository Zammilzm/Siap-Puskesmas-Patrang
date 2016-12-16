<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pasien;

use Session;

use DB;

use Carbon\Carbon;

class PasienController extends Controller
{
    	public function pasien()
    	{
    		$pasiens = pasien::all();

    		return view('pasien', compact('pasiens'));
    		// return $mahasiswas;
    	}

        public function tampilFormPasien(){
            return view('formAdd');
        }
  
        public function addPasien(Request $request)
        {
            $input = ([
                'id_pasien' => $request->id_pasien,
                'no_ktp' => $request->no_ktp,
                'no_kk' => $request->no_kk,
                'nama_pasien' => $request->nama_pasien,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'golongan_darah' => $request->golongan_darah,

                ]);
            pasien::create($input);
            Session::flash('flash_message', 'data berhasil disimpan');
            return redirect('pasien'); 
        }

        public function editPasien($id_pasien)
        {
            $dataPasien = pasien::where('id_pasien', $id_pasien)->first();           
            return view('formEdit', compact('dataPasien'));
        }

        public function updatePasien(Request $request, pasien $pasien, $id_pasien)
        {
                $input = ([
                
                'no_ktp' => $request->no_ktp,
                'no_kk' => $request->no_kk,
                'nama_pasien' => $request->nama_pasien,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'golongan_darah' => $request->golongan_darah,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang

                ]);

            $data = $pasien::where('id_pasien',$id_pasien)->update($input);
            Session::flash('flash_message', 'data berhasil disimpan');
            return redirect('pasien');
        }

        public function detailPasien($id_pasien)
        {
            $pasien = pasien::where('id_pasien', $id_pasien)->first();
            return view('viewDetail', compact('pasien'));
        }	
      

        
}
