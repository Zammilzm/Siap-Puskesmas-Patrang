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
//  public function administrasiRI()
//  {
//   $administrasi_rawat_inaps = AdministrasiRawatInap::all();

//   return view('administrasiRawatInap', compact('administrasi_rawat_inaps'));

// }
//   public function tampil()
//   {
//     $administrasi = AdministrasiRawatInap::where('keterangan_pembayaran','=','0')->get();
//     return view('administrasiRawatInap', compact('administrasi_rawat_inaps'));
// }
public function lunas($id_administrasi)
{
    AdministrasiRawatInap::where('id_pembayaran_inap',$id_administrasi)->update(['keterangan_pembayaran' => 'LUNAS']);
    return redirect('administrasiRawatInap');
}
public function administrasi()
	{
		$administrasiRawatInap = AdministrasiRawatInap::where('keterangan_pembayaran','=','BELUM LUNAS')->get();
		return view('administrasiRawatInap', compact('administrasiRawatInap'));
	}

}
