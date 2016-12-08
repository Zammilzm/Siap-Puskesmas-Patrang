<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/datatables.min.css') }}">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
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
				<a href="#!user"><img class="circle" src="{{ URL::asset('/image/loket.png') }}"></a>
				<a href="#!name"><span class="white-text name">LOKET</span></a>
			</div>
		</li>
		<li><a href="{{URL('homeLoket')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a href="{{URL('pasien')}}" class="waves-effect" >
				<i class="material-icons active">face</i>Pengelolaan Pasien
			</a>
		</li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect" href="{{URL('pendaftaran')}}">Pengelolaan Pendaftaran
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('administrasiRawatInap')}}">Administrasi Rawat Inap
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('bpjs')}}">Lihat BPJS
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<form class="col s11 offset-s2" method="POST" action="{{ url('/add/tambahs') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">TAMBAH PENDAFTARAN</h2>
				<!-- <div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="text" class="validate" name="id_pendaftaran" required disabled>
						<label for="pendaftaran">ID Pendaftaran</label>
					</div>
				</div> -->
				<div class="row">
					<div class="input-field col s3">
						<select name="id_pasien">
<!-- 							<option value="" disabled selected>Pilih Id Pasien</option> -->
							@foreach($pasiens as $pasien)
							<option value="{{$pasien->id_pasien}}">{{$pasien->id_pasien}}</option>
							@endforeach
						</select>
						<label for="ID_PASIEN">pilih id pasien</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3">
						<select name="id_poli">
							<!-- <option value="" disabled selected>Pilih Id Poli</option> -->
							@foreach($polis as $poli)
							<option value="{{$poli->id_poli}}">{{$poli->id_poli}}</option>
							@endforeach
						</select>
							<label for="ID_PASIEN">pilih ID POLI</label>
					</div>
				</div>
				<div class="row">
					<div class="row">
						<div class="input-field col s3">
							<select name="status">
<!-- 								<option value="" disabled selected>Status</option> -->
								<option value="1">BPJS</option>
								<option value="0">UMUM</option>
							</select>
							<label>STATUS</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10">
							<p>Tanggal Periksa</p>
							<input id="icon_telephone" type="date" class="validate" name="tanggal_periksa" required >

						</div>
					</div>
					<div class="row">
						<div class="col-md-7 offset-s2">
							<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button>
							<br><button type="reset" class="btn btn-primary btn-block" >RESET</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- 	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
<!-- 	<script type="text/javascript" src="{{URL::asset('asset/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('asset/css/jquery-1.11.1.min.js') }}"></script> -->
	<script type="text/javascript" src="{{ URL::asset('asset/js/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('asset/js/datatables.min.js') }}"></script>
	<script type="text/javascript">
		$( document ).ready(function(){$(".button-collapse").sideNav();});
		$(document).ready(function() {
			$('select').material_select();
		});
		$(document).ready(function(){
			$('#table_administrasi').DataTable();
		});
	</script>
</body>
</html>