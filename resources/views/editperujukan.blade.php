<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<!-- 	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/bootstrap/css/bootstrap.min.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/styleuser.css') }}">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home User</title>
</head>
<body style="background-color:#cfd8dc;">
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	<ul id="slide-out" class="side-nav fixed">
		<li>
			<div class="userView">
				<div class="background">
					<img src="{{ URL::asset('/image/angga.jpg') }}">
				</div>
				<a href="#!user"><img class="circle" src="{{ URL::asset('/image/iconperawat.png') }}"></a>
				<a href="#!name"><span class="white-text name">PERAWAT</span></a>
			</div>
		</li>
		<li><a href="{{URL('perawat')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li><a href="{{URL('pemeriksaan')}}" class="waves-effect" ><i class="material-icons">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect active" href="{{URL('rujukan')}}">PERUJUKAN PASIEN
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('teslab')}}">LIHAT TES LAB DALAM
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<li>
			<a class="waves-effect" href="{{URL('resep')}}">PENGELOLAAN RESEP OBAT
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<li>
			<a class="waves-effect" href="{{URL('rawatinap')}}">PENGELOLAAN RAWAT INAP
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<form class="col s11 offset-s2" method="POST" action="{{ url('/update/rujukans/'.$datarujukans->id_rujukan) }}">
				{{method_field('put')}}
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">DATA PEMERIKSAAN</h2>
				<div class="row">
					<div class="input-field col s10">
						<select name="id_pelayanan" disabled>
							@foreach($pelayanans as $pelayanan)
							<option {{($datarujukans->id_pelayanan==$pelayanan->id_pelayanan)?'selected':''}} value="{{$pelayanan->id_pelayanan}}">{{$pelayanan->id_pelayanan}}</option>
							@endforeach
						</select>		
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<p>Tanggal Rujukan</p>
						<input type="date" name="tanggal_rujukan" value="{{$datarujukans->tanggal_rujukan}}">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate" name="keterangan" value="{{$datarujukans->keterangan}}">
						<label for="Alamat">keterangan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<select name="tempat_rujukan" id="icon_telephone">
							@if($datarujukans->tempat_rujukan == 'Rsud_Situbondo')
							<option value="Rsud_Situbondo" selected>RSUD SITUBONDO</option>
							<option value="Rsud_Jember">RSUD JEMBER</option>
							<option value="Rsud_Arjasa">RSUD ARJASA</option>
							<option value="Jember_Klinik">JEMBER KLINIK</option>
							<option value="Rsud_Patrang">RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi">RSUD BANYUWANGI</option>
							<option value="Rsud_Malang">RSUD MALANG</option>
							@endif
							@if($datarujukans->tempat_rujukan == 'Rsud_Jember')
							<option value="Rsud_Situbondo">RSUD SITUBONDO</option>
							<option value="Rsud_Jember" selected>RSUD JEMBER</option>
							<option value="Rsud_Arjasa">RSUD ARJASA</option>
							<option value="Jember_Klinik">JEMBER KLINIK</option>
							<option value="Rsud_Patrang">RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi">RSUD BANYUWANGI</option>
							<option value="Rsud_Malang">RSUD MALANG</option>
							@endif
							@if($datarujukans->tempat_rujukan=='Rsud_Arjasa')
							<option value="Rsud_Situbondo">RSUD SITUBONDO</option>
							<option value="Rsud_Jember">RSUD JEMBER</option>
							<option value="Rsud_Arjasa" selected>RSUD ARJASA</option>
							<option value="Jember_Klinik">JEMBER KLINIK</option>
							<option value="Rsud_Patrang">RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi">RSUD BANYUWANGI</option>
							<option value="Rsud_Malang">RSUD MALANG</option>
							@endif
							@if($datarujukans->tempat_rujukan=='Jember_Klinik')
							<option value="Rsud_Situbondo">RSUD SITUBONDO</option>
							<option value="Rsud_Jember">RSUD JEMBER</option>
							<option value="Rsud_Arjasa">RSUD ARJASA</option>
							<option value="Jember_Klinik" selected>JEMBER KLINIK</option>
							<option value="Rsud_Patrang">RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi">RSUD BANYUWANGI</option>
							<option value="Rsud_Malang">RSUD MALANG</option>
							@endif
							@if($datarujukans->tempat_rujukan=='Rsud_Patrang')
							<option value="Rsud_Situbondo">RSUD SITUBONDO</option>
							<option value="Rsud_Jember">RSUD JEMBER</option>
							<option value="Rsud_Arjasa">RSUD ARJASA</option>
							<option value="Jember_Klinik">JEMBER KLINIK</option>
							<option value="Rsud_Patrang" selected>RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi">RSUD BANYUWANGI</option>
							<option value="Rsud_Malang">RSUD MALANG</option>
							@endif
							@if($datarujukans->tempat_rujukan=='Rsud_Banyuwangi')
							<option value="Rsud_Situbondo">RSUD SITUBONDO</option>
							<option value="Rsud_Jember">RSUD JEMBER</option>
							<option value="Rsud_Arjasa">RSUD ARJASA</option>
							<option value="Jember_Klinik">JEMBER KLINIK</option>
							<option value="Rsud_Patrang">RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi" selected>RSUD BANYUWANGI</option>
							<option value="Rsud_Malang">RSUD MALANG</option>
							@endif
							@if($datarujukans->tempat_rujukan=='Rsud_Malang')
							<option value="Rsud_Situbondo">RSUD SITUBONDO</option>
							<option value="Rsud_Jember">RSUD JEMBER</option>
							<option value="Rsud_Arjasa">RSUD ARJASA</option>
							<option value="Jember_Klinik">JEMBER KLINIK</option>
							<option value="Rsud_Patrang">RSUD PATRANG</option>
							<option value="Rsud_Banyuwangi">RSUD BANYUWANGI</option>
							<option value="Rsud_Malang" selected>RSUD MALANG</option>
							@endif
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input disabled value="Tidak Tervalidasi" id="disabled" type="text" class="validate" name="status_rujukan" value="{{$datarujukans->status_rujukan}}">
						<label for="EMail">status rujukan
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button><br>
						<a href="{{URL('rujukan')}}" class="btn btn-primary">
							BATAL
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- 	<script type="text/javascript" src="{{ URL::asset('asset/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('asset/js/jquery-1.11.1.min.js') }}"></script> -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function(){$(".button-collapse").sideNav();});
		$(document).ready(function() {
			$('select').material_select();
		});
		$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
</script>
</body>
</html>