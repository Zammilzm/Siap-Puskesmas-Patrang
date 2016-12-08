<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pendaftaran;

use App\pasien;

use App\poli;

use Session;

use Carbon\Carbon
;

class PendaftarController extends Controller
{
        public function Pendaftaran()
        {
            $pendaftarans = pendaftaran::all();
            return view('pendaftaran', compact('pendaftarans'));
            // return $mahasiswas;
        }

        public function addPendaftaran(Request $request)
        {
            $input = ([
                'id_pendaftaran' => $request->id_pendaftaran,
                'id_pasien' => $request->id_pasien,
                'id_poli' => $request->id_poli,
                'status' => $request->status,
                'tanggal_periksa'=> $request->tanggal_periksa
                ]);
            pendaftaran::create($input);
            Session::flash('flash_message', 'data berhasil disimpan');
            return redirect('pendaftaran');
        }

        public function tampilFormPendaftaran(){
            $pasiens = pasien::all();
            $polis = poli::all();
            return view('pendaftaranFormAdd',compact('pasiens','polis'));
        }
        
        public function editPendaftaran($id_pendaftaran){
            $dataPendaftar = pendaftaran::find($id_pendaftaran);
            $pasiens = pasien::all();
            $polis = poli::all();
            return view('pendaftaranFormEdit', compact('dataPendaftar', 'pasiens', 'polis'));
        }

        public function updatePendaftaran(Request $request, pendaftaran $pendaftaran, $id_pendaftaran)
        {
                $input = ([
                'id_poli' => $request->id_poli,
                'status' => $request->status,
                'tanggal_periksa'=> $request->tanggal_periksa,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);

                $data = $pendaftaran::where('id_pendaftaran',$id_pendaftaran)->update($input);
                Session::flash('flash_message', 'data berhasil disimpan');
                return redirect('pendaftaran');
        }
}   
