<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\kamar;

use App\pegawai;

class kamarController extends Controller
{
    public function dokterlihatkamar()
    {
        $kamars = kamar::all();
        return view('dokterlihatkamar', compact('kamars'));
    }
    public function perawatlihatkamar()
    {
        $kamars = kamar::all();
        return view('perawatlihatkamar', compact('kamars'));
    }
    public function kamar()
    {
        $kamars = kamar::all();
        return view('pengelolaandatakamar', compact('kamars'));
    }
    public function formkamar()
    {
        $pegawais = pegawai::all();
        $kamars = kamar::all();
        return view('formdatakamar', compact('kamars','pegawais'));
    }
    public function adddatakamar(Request $request)
    {
        $input = ([
            'id_pegawai' => $request->id_pegawai,
            'nama_kamar' => $request->nama_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'no_kamar' => $request->no_kamar,
            'tarif_kamar' => $request->tarif_kamar,
            ]);
        kamar::create($input);
        Session::flash('flash_message', 'data berhasil disimpan');
        return redirect('datakamar');
    }
    public function editdatakamar($id_kamar)
    {
        $datakamars = kamar::find($id_kamar);
        $pegawais = pegawai::all();

        return view('editdatakamar', compact('datakamars', 'pegawais'));
    }
    public function updatedatakamar(Request $request, kamar $kamar, $id_kamar)
    {
        $input = ([

            'id_pegawai' => $request->id_pegawai,
            'nama_kamar' => $request->nama_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'no_kamar' => $request->no_kamar,
            'tarif_kamar' => $request->tarif_kamar,
                'updated_at' => Carbon::now() //carbon buat inisialisasi tanggal dan waktu skrang
                ]);
        // echo "<pre>";
        // print_r($input);

        $data = $kamar::where('id_kamar',$id_kamar)->update($input);
        Session::flash('flash_message', 'data berhasil diupdate');
        return redirect('datakamar');
    }
}
