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
				<a href="#!name"><span class="white-text name">TATA USAHA</span></a>
			</div>
		</li>
		<li><a href="{{URL('tu')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li><a href="{{URL('datakamar')}}" class="waves-effect active" ><i class="material-icons">face</i>PENGELOLAAN DATA KAMAR</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect" href="{{URL('lihatpegawai')}}">LIHAT DATA PEGAWAI
				<i class="material-icons">assignment</i>
			</a>
		</li>
		
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('#')}}">LIHAT DATA BPJS
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<form class="col s11 offset-s2" method="POST" action="{{ url('/add/datakamar') }}">
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">DATA KAMAR</h2>
				<div class="row">
					<div class="input-field col s10">
						<select name="id_pegawai">
							@foreach($pegawais as $pegawai)
							<option value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
							@endforeach
						</select>		
						<label for="icon_telephone">PILIH ID PEGAWAI</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<select name="nama_kamar" id="icon_telephone">
							<option value="Mawar">Mawar</option>
							<option value="Melati">Melati</option>
							<option value="Anggrek">Anggrek</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<select name="jenis_kamar" id="icon_telephone">
							<option value="Kelas 1">Kelas 1</option>
							<option value="Kelas 2">Kelas 2</option>
							<option value="Kelas 3">Kelas 3</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<p>Nomer Kamar</p>
						<input type="number" name="no_kamar" required>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<p>Tarif Kamar</p>
						<input type="number" name="tarif_kamar" required>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button> <br>
						<button type="reset" class="btn btn-primary btn-block" >BATAL</button>
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
// 		$('.datepicker').pickadate({
//     selectMonths: true, // Creates a dropdown to control month
//     selectYears: 15 // Creates a dropdown of 15 years to control year
// });
</script>
</body>
</html>