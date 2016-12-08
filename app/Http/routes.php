<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/website', function () {
    return view('TampilanAwal');
});
Route::get('/perawat', function () {
    return view('homeperawat');
});
Route::get('rujukan','rujukanController@rujukan');

Route::get('pemeriksaan','pelayananpemeriksaanController@pemeriksaan');

Route::get('formpemeriksaan','pelayananpemeriksaanController@formpemeriksaan');

Route::get('formrujukanpasien','rujukanController@formrujukan');

Route::post('add/rujukans','rujukanController@addrujukan');

Route::post('add/pemeriksaans','pelayananpemeriksaanController@addpemeriksaan');

Route::get('edit/pelayanans/{id_pelayanan}','pelayananpemeriksaanController@editpemeriksaan'); 

Route::put('update/pemeriksaans/{id_pelayanan}','pelayananpemeriksaanController@updatepemeriksaan'); 

Route::get('edit/rujukans/{id_rujukan}','rujukanController@editrujukan');

Route::put('update/rujukans/{id_rujukan}','rujukanController@updaterujukan'); 

Route::get('teslab','tes_lab_dalamController@hasiltes');

Route::get('resep','resepobatController@resep');

Route::get('formresepobat','resepobatController@formresep');

Route::post('add/reseps','resepobatController@addresepobat');

Route::get('edit/obats/{id_resep}','resepobatController@editresep');

Route::put('update/obats/{id_resep}','resepobatController@updateresep'); 

Route::get('rawatinap','rawatinapController@rawatinap');

Route::get('formrawatinap','rawatinapController@formrawatinap');

Route::post('add/rawatinaps','rawatinapController@addrawatinap');

Route::get('edit/rawats/{id_rawat_inap}','rawatinapController@editrawatinap');

Route::put('update/rawatinaps/{id_rawat_inap}','rawatinapController@updaterawatinap'); 

Route::get('resepapoteker','resepapotekerController@resep');

Route::get('edit/apotekers/{id_resep}','resepapotekerController@pengelolaanresep');

Route::put('update/apotekers/{id_resep}','resepapotekerController@simpanresep');

Route::get('pasien','PasienController@pasien'); 

Route::post('add/tambah','PasienController@addPasien');

Route::get('edit/{id_pasien}','PasienController@editPasien'); 

Route::put('update/{id_pasien}','PasienController@updatePasien');

Route::get('form', function() { //www.webiste/form
	return view('formAdd');
});

Route::get('formPendaftaran', function() { //www.webiste/form
	return view('pendaftaranFormAdd'); 
});
Route::get('formPendaftaran','PendaftarController@tampilFormPendaftaran'); 

Route::get('pendaftaran','PendaftarController@Pendaftaran'); 

Route::post('add/tambahs','PendaftarController@addPendaftaran');

Route::get('edit/pendaftaran/{id_pendaftaran}','PendaftarController@editPendaftaran'); 

Route::put('update/pendaftaran/{id_pendaftaran}','PendaftarController@updatePendaftaran'); 

Route::get('/homeLoket', function () {
    return view('homeLoket');
});

Route::get('/home', 'HomeController@index');

Route::get('bpjs','BpjsController@bpjs'); 

Route::get('administrasiRawatInap','AdministrasiRIController@administrasiRI');

Route::get('formAdministrasi','AdministrasiRIController@tampilFormAdministrasi'); 

Route::post('add/tambahAdministrasi','AdministrasiRIController@addAdministrasiRI');

Route::get('edit/administrasi/{id_pembayaran_inap}','AdministrasiRIController@editAdministrasi'); 

Route::put('update/administrasi/{id_pembayaran_inap}','AdministrasiRIController@updateAdministrasi'); 

Route::get('coba/{id_pasien}','cetak@cetak'); 

Route::get('validasi','rujukanController@validasiRujukan');

Route::get('edit/validasi/{id_rujukan}','rujukanController@validasi');