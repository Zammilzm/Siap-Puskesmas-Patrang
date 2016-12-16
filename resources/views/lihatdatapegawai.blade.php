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
		<li><a href="{{URL('datakamar')}}" class="waves-effect" ><i class="material-icons">face</i>PENGELOLAAN DATA KAMAR</a></li>
		<li><div class="divider"></div></li>

		<li>
			<a class="waves-effect active" href="{{URL('lihatpemeriksaan')}}">LIHAT DATA PEGAWAI
				<i class="material-icons active">assignment</i>
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
			<div class="col s12 offset-s2">
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">LIHAT PEGAWAI</h2>
				<table class="table table-condensed table-hover striped" id="table_lab">
					<thead>
						<th>ID Pegawai</th>
						<th>Nama Pegawai</th>
						<th>Status Pegawai</th>
						<th>No KK</th>
						<th>No KTP</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
						<th>Golongan Darah</th>
						<th>Umur</th>
						<th>Lulusan</th>
						<th>Asal Pendidikan</th>
					</thead>
					<tbody>
						@foreach($pegawais as $pegawai)
						<tr>
							<td>{{ $pegawai->id_pegawai }}</td>
							<td>{{ $pegawai->nama_pegawai }}</td>
							<td>{{ $pegawai->status_pegawai }}</td>
							<td>{{ $pegawai->no_kk }}</td>
							<td>{{ $pegawai->no_ktp }}</td>
							<td>{{ $pegawai->alamat }}</td>
							<td>{{ $pegawai->tanggal_lahir }}</td>
							<td>{{ $pegawai->golongan_darah }}</td>
							<td>{{ $pegawai->umur }}</td>
							<td>{{ $pegawai->lulusan }}</td>
							<td>{{ $pegawai->asal_pendidikan }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- 	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function(){$(".button-collapse").sideNav();});
		$(document).ready(function() {
			$('select').material_select();
		});
	</script>
	<script type="text/javascript" src="{{ URL::asset('asset/js/datatables.min.js') }}"></script>
	<script type="text/javascript">
			$(document).ready(function(){
			$('#table_lab').DataTable();
	});
	</script>
</body>
</html>