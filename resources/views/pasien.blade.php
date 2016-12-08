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
				<i class="material-icons active">face</i>PENGELOLAAN PASIEN
			</a>
		</li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect" href="{{URL('pendaftaran')}}">PENGELOLAAN PENDAFTARAN
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('administrasiRawatInap')}}">ADMINISTRASI RAWAT INAP
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect" href="{{URL('bpjs')}}">LIHAT BPJS
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col s12 offset-s2">
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">DAFTAR PASIEN</h2>
				@if(Session::has('flash_message'))
				<div class="row">
					<div class="card-panel teal lighten-2 chip">
							{{Session::get('flash_message')}}
						<i class="close material-icons">close</i>
					</div>
				</div>
				@endif
					<a href="{{URL('form')}}" class="btn btn-primary">TAMBAH PASIEN</a>
					<table class="table table-condensed table-hover striped" id="table_pasien">
						<thead>
							<th>ID Pasien</th>
							<th>No KTP</th>
							<th>No KK</th>
							<th>Nama Pasien</th>
							<th>alamat</th>
							<th>tanggal lahir</th>
							<th>golongan darah</th>
							<th>aksi</th>
						</thead>
						<tbody>
							@foreach($pasiens as $pasien)
							<tr>
								<td>{{ $pasien->id_pasien }}</td>
								<td>{{ $pasien->no_ktp }}</td>
								<td>{{ $pasien->no_kk }}</td>
								<td>{{ $pasien->nama_pasien }}</td>
								<td>{{ $pasien->alamat }}</td>
								<td>{{ $pasien->tanggal_lahir }}</td>
								@if($pasien->golongan_darah  == 'A')
								<td>A</td>
								@endif
								@if($pasien->golongan_darah  == 'B')
								<td>B</td>
								@endif
								@if($pasien->golongan_darah  == 'AB')
								<td>AB</td>
								@endif
								@if($pasien->golongan_darah  == 'O')
								<td>O</td>
								@endif
								<!-- <td>{{ $pasien->golongan_darah}}</td> -->
								<td>
									<a href="/edit/{{$pasien->id_pasien}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="UPDATE">
										<i class="material-icons">event_available</i>
									</a>
									<a href="/coba/{{$pasien->id_pasien}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="CETAK">
										<i class="material-icons">print</i>
									</a>

				 		<!-- <a href="/edit/{{$pasien->id_pasien}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="HAPUS">
							<i class="material-icons">event_available</i>
						</a> -->
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
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
			$('#table_pasien').DataTable();
		});
	</script>
</body>
</html>