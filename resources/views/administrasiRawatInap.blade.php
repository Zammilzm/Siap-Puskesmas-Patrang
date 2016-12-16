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
		<li>
			<a class="waves-effect" href="{{URL('rawatinap')}}">PELAYANAN RAWAT INAP
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
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">ADMINISTRASI RAWAT INAP</h2>
				<!-- @if(Session::has('flash_message'))
					<div class="alert alert-success alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span></button>
  					{{Session::get('flash_message')}}
					</div>
					@endif -->
					<a href="{{URL('formAdministrasi')}}" class="btn btn-primary">DAFTAR BARU</a>
					<table class="table table-condensed table-hover " id="table_administrasi">
						<thead>
							<th>ID Pembayaran</th>
							<th>Nama Pasien</th>

							<th>Status Pasien</th>

							<th>Lama Menginap</th>
							<th>Total Pembayaran</th>
							<th>Keterangan</th>
							<th>aksi</th>
						</thead>
						<tbody>
							@foreach($administrasiRawatInap as $administrasiRawatInap)
							<tr>
								<td>{{ $administrasiRawatInap->id_pembayaran_inap }}</td>
								<td>{{ $administrasiRawatInap->rawatinap->pelayanan->pendaftaran->pasien->nama_pasien }}</td>
								<td>{{ $administrasiRawatInap->rawatinap->pelayanan->pendaftaran->status == 1 ? 'BPJS' : 'Umum'  }}</td>
							

								<td>{{ $administrasiRawatInap->rawatinap->lama_menginap }}</td>
								<td>{{ $administrasiRawatInap->total_pembayaran }}</td>
								<td>{{$administrasiRawatInap->keterangan_pembayaran}}</td>
								<!-- @if($administrasiRawatInap->keterangan_pembayaran  == '1')
								<td>Lunas</td>
								@endif
								@if($administrasiRawatInap->keterangan_pembayaran == '0')
								<td>Belum Lunas</td>
								@endif -->
								
								<td>
									<a href="/edit/lunas/{{$administrasiRawatInap->id_pembayaran_inap}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="UPDATE">
										<i class="material-icons">event_available</i>
									</a>
									<!-- <a href="#" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="HAPUS">
										<i class="material-icons">block</i> -->
									
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
			$('#table_administrasi').DataTable();
		});
	</script>
</body>
</html>