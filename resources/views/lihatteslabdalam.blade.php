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
				<a href="#!name"><span class="white-text name">PERAWAT</span></a>
			</div>
		</li>
		<li><a href="{{URL('perawat')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li><a href="{{URL('pemeriksaan')}}" class="waves-effect" ><i class="material-icons">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect" href="{{URL('rujukan')}}">PERUJUKAN PASIEN
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect active" href="{{URL('teslab')}}">LIHAT TES LAB DALAM
				<i class="material-icons active">assignment</i>
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
			<div class="col s12 offset-s2">
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">DAFTAR TES UJI LAB PASIEN</h2>
				<table class="table table-condensed table-hover striped" id="table_lab">
					<thead>
						<th>ID Tes Lab Dalam</th>
						<th>ID Pelayanan</th>
						<th>Nama Pasien</th>
						<th>Golongan Darah</th>
						<th>Diagnosa Penyakit</th>
						<th>Tanggal tes</th>
						<th>Hasil Tes Lab</th>
					</thead>
					<tbody>
						@foreach($hasilteslabs as $hasilteslab)
						<tr>
							<td>{{ $hasilteslab->id_tes_laboran_dalam }}</td>
							<td>{{ $hasilteslab->id_pelayanan}}</td>
							<td>{{ $hasilteslab->pelayanan->pendaftaran->pasien->nama_pasien }}</td>
							<td>{{ $hasilteslab->pelayanan->pendaftaran->pasien->golongan_darah }}</td>
							<td>{{ $hasilteslab->pelayanan->diagnosa_penyakit }}</td>
							<td>{{ $hasilteslab->tanggal_tes }}</td>
							<td>{{ $hasilteslab->hasil_tes_lab }}</td>
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