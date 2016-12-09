<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/styleuser.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/datatables.min.css') }}">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home</title>
</head>
<body style="background-color:#eceff1;">
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
		<li><a href="{{URL('pemeriksaan')}}" class="waves-effect active" ><i class="material-icons">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect" href="{{URL('rujukan')}}">PERUJUKAN PASIEN
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
			<form class="col s7 offset-s1" method="POST" action="{{ url('/add/pemeriksaans') }}">
				<div class="card-panel">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					{{ csrf_field() }}
					<h2 style="text-decoration:underline;">DATA PEMERIKSAAN</h2>
					<div class="row">
						<div class="input-field col s6">
							<select name="id_pendaftaran" required>
								@foreach($pendaftarans as $pendaftaran)
								<option value="{{$pendaftaran->id_pendaftaran}}">{{$pendaftaran->id_pendaftaran}}</option>
								@endforeach
							</select>
							<label for="icon_telephone" class="brown-text darken-4">PILIH ID PENDAFTARAN YANG AKAN DILAYANI</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10">
							<input id="icon_telephone" type="text" class="validate" name="keluhan" required>
							<label for="Alamat" class="brown-text darken-4">Keluhan</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10">
							<input id="icon_telephone" type="tel" class="validate" name="diagnosa_penyakit" required>
							<label for="icon_telephone" class="brown-text darken-4">Diagnosa Penyait</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s3">
							<select name="id_pegawai" required>
								@foreach($pegawais as $pegawai)
								<option value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
								@endforeach
							</select>
							<label for="icon_telephone" class="brown-text darken-4">PILIH ID PEGAWAI</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10" required>
							<textarea id="textarea1" class="materialize-textarea" name="saran_dokter"></textarea>
							<label for="textarea1" class="brown-text darken-4">Saran Dokter</label>
						</div>
					</div>
					<div class="row">
						<h5>
							LAYANAN PEMERIKSAAN
						</h5>
						<p>
							<input type="checkbox" id="test5" name="rawat_inap" value="1">
							<label for="test5" class="brown-text darken-4">RAWAT INAP</label>
						</p>
						<p>
							<input type="checkbox" id="test6" name="rekam_medis" value="1">
							<label for="test6" class="brown-text darken-4">REKAM MEDIS</label>
						</p>
						<p>
							<input type="checkbox" id="test7" name="rujukan" value="1">
							<label for="test7" class="brown-text darken-4">RUJUKAN</label>
						</p>
						<p>
							<input type="checkbox" id="test8" name="resep" value="1">
							<label for="test8" class="brown-text darken-4">RESEP OBAT</label>
						</p>
						<p>
							<input type="checkbox" id="test9" name="uji_lab" value="1">
							<label for="test9" class="brown-text darken-4">UJI LAB</label>
						</p>
					</div>
					<div class="row">
						<div class="col-md-7 offset-s2">
							<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button> <br>
							<button type="reset" class="btn btn-primary btn-block" >BATAL</button>
						</div>
					</div>
				</div>
			</form>
			<div class=" col s4">
				<div class="card-panel">
					<table class="table table-condensed table-hover striped" id="table_periksa">
						<thead>
							<th>ID Daftar</th>
							<th>Nama Pasien</th>
							<th>Pilihan Layanan</th>
						</thead>
						<tbody>
							@foreach($pendaftarans as $pendaftaran)
							<tr>
								<td>{{ $pendaftaran->id_pendaftaran}}</td>
								<td>{{ $pendaftaran->pasien->nama_pasien}}</td>
								<td>{{ $pendaftaran->poli->nama_poli}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
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
<script type="text/javascript" src="{{ URL::asset('asset/js/datatables.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table_periksa').DataTable();
	});
</script>
</body>
</html>