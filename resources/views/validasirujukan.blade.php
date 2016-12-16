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
				<a href="#!name"><span class="white-text name">DOKTER</span></a>
			</div>
		</li>
		<li><a href="{{URL('perawat')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect active" href="{{URL('rujukan')}}">Validasi Rujukan
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('teslab')}}">Lihat Layanan Pemeriksaan
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<li>
			<a class="waves-effect" href="{{URL('resep')}}">Lihat Rekam Medik
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<li>
			<a class="waves-effect">Lihat Pelayanan Rawat Inap
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>

		<li>
			<a class="waves-effect">Lihat Tes Laboratorium Dalam
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col s12 offset-s2">
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">DAFTAR RUJUKAN</h2>
				<table class="table table-condensed table-hover striped" id="table_rujukan">
					<thead>
						<th>ID Rujukan</th>
						<th>ID Pelayanan</th>
						<th>Nama Pasien</th>
						<th>Tanggal Rujukan</th>
						<th>Keterangan</th>
						<th>Dokter Pemberi Rujukan</th>
						<th>Tempat Rujukan</th>
						<th>Status Rujukan</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						@foreach($rujukanpasien as $rujukan)
						<tr>
							<td>{{ $rujukan->id_rujukan }}</td>
							<td>{{ $rujukan->id_pelayanan}}</td>
							<td>{{ $rujukan->pelayanan->pendaftaran->pasien->nama_pasien}}</td>
							<td>{{ $rujukan->pelayanan->pendaftaran->pasien->umur}}</td>
							<td>{{ $rujukan->tanggal_rujukan }}</td>
							<td>{{ $rujukan->keterangan }}</td>
							<td>{{ $rujukan->pelayanan->pegawai->nama_pegawai}}</td>
							<td>{{ $rujukan->tempat_rujukan }}</td>
							<td>{{ $rujukan->status_rujukan }}</td>
							<td>
								<a href="/edit/validasi/{{$rujukan->id_rujukan}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="TERIMA">
									<i class="material-icons">done</i>
								</a>
							</td>
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
			$('#table_rujukan').DataTable();
		});
	</script>
</body>
</html>