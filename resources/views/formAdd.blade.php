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
			<form class="col s11 offset-s2" method="POST" action="{{  url('/add/tambah') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">TAMBAH PASIEN</h2>
				<!-- <div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="text" class="validate" name="id_pasien" required disabled>
						<label for="idpasien">ID Pasien</label>
					</div>
				</div> -->
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="number" class="validate" name="no_ktp" required >
						<label for="Noktp">NO KTP</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="number" class="validate" name="no_kk" required>
						<label for="Nokk">NO KK</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="text" class="validate" name="nama_pasien" required >
						<label for="Namapasien">NAMA PASIEN</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						
						<textarea id="icon_telephone" type="text" class="validate" name="alamat" required ></textarea>
						<label for="alamat">ALAMAT</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<p>Tanggal Lahir</p>
						<input id="icon_telephone" type="date" class="validate" name="tanggal_lahir" required >		
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3">
						<p>
							<input type="radio" id="test1" name="golongan_darah" value="A" checked=""/>
							<label for="test1">A</label>
						</p>
						<p>
							<input type="radio" id="test2" name="golongan_darah" value="B"/>
							<label for="test2">B</label>
						</p>
						<p>
							<input type="radio" id="test3" name="golongan_darah" value="AB" >
							<label for="test3">AB</label>
						</p>
						<p>
							<input  type="radio" id="test4" name="golongan_darah" value="O"/>
							<label for="test4">O</label>
						</p>
						<label>Golongan Darah</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 offset-s2">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button>
						<br><button type="reset" class="btn btn-primary btn-block" >BATAL</button>
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