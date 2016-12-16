<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pegawai;

class pegawaiController extends Controller
{
    public function lihatpegawai()
    {
        $pegawais = pegawai::all();
        return view('lihatdatapegawai', compact('pegawais'));
    }
}
