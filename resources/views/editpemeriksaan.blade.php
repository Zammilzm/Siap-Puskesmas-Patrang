<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/styleuser.css') }}">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home</title>
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
			<form class="col s11 offset-s2" method="POST" action="{{ url('/update/pemeriksaans/'.$dataPelayanans->id_pelayanan) }}">
				{{method_field('put')}}
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">DATA PEMERIKSAAN</h2>
				<div class="row">
					<div class="input-field col s3">
						<select name="id_pendaftaran" disabled>
							@foreach($pendaftarans as $pendaftaran)
							<option {{($dataPelayanans->id_pendaftaran==$pendaftaran->id_pendaftaran)?'selected':''}} value="{{$pendaftaran->id_pendaftaran}}">{{$pendaftaran->id_pendaftaran}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate" name="keluhan" value="{{$dataPelayanans->keluhan}}">
						<label for="Alamat" class="brown-text darken-4">Keluhan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate" name="diagnosa_penyakit" value="{{$dataPelayanans->diagnosa_penyakit}}">
						<label for="icon_telephone" class="brown-text darken-4">Diagnosa Penyait</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3">
						<select name="id_pegawai">
							<option value="" disabled selected>Pilih Id Pegawai</option>
							@foreach($pegawais as $pegawai)
							<option {{($dataPelayanans->id_pegawai==$pegawai->id_pegawai)?'selected':''}} value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
							@endforeach
						</select>
						<label for="icon_telephone" class="brown-text darken-4">PILIH ID PEGAWAI</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<textarea id="textarea1" class="materialize-textarea" name="saran_dokter" >
							{{$dataPelayanans->saran_dokter}}
						</textarea>
						<label for="textarea1" class="brown-text darken-4">Saran Dokter</label>
					</div>
				</div>
				<div class="row">
					<div class="row">
						<h5>
							LAYANAN PEMERIKSAAN
						</h5>
						<p>
							<input type="checkbox" id="test5" name="rawat_inap" value="1" {{ $dataPelayanans->rawat_inap==1 ? 'checked' : '' }}>
							<label for="test5" class="brown-text darken-4">RAWAT INAP</label>
						</p>
						<p>							
							<input type="checkbox" id="test6" name="rekam_medis" value="1" {{ $dataPelayanans->rekam_medis==1 ? 'checked' : ''  }}>
							<label for="test6" class="brown-text darken-4">REKAM MEDIS</label>
						</p>
						<p>
							<input type="checkbox" id="test7" name="rujukan" value="1" {{ $dataPelayanans->rujukan==1 ? 'checked' : ''  }}>
							<label for="test7" class="brown-text darken-4">RUJUKAN</label>
						</p>
						<p>
							<input type="checkbox" id="test8" name="resep" value="1" {{ $dataPelayanans->resep==1 ? 'checked' : ''  }}>
							<label for="test8" class="brown-text darken-4">RESEP OBAT</label>
						</p>
						<p>
							<input type="checkbox" id="test9" name="uji_lab" value="1" {{ $dataPelayanans->uji_lab==1 ? 'checked' : ''  }}>
							<label for="test9" class="brown-text darken-4">UJI LAB</label>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button><br>
						<a href="{{URL('pemeriksaan')}}" class="btn btn-primary">
							BATAL
						</a>
					</div>
				</div>
			</form>
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
</body>
</html>