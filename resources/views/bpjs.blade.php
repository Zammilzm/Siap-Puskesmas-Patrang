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
	<title>BPJS</title>
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
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">DAFTAR BPJS</h2>
				<!-- @if(Session::has('flash_message'))
					<div class="alert alert-success alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span></button>
  					{{Session::get('flash_message')}}
					</div>
					@endif -->
					<table table class="table table-condensed table-hover striped" id="table_bpjs">
						<thead>
							<th>ID BPJS</th>
							<th>Nama BPJS</th>
							<th>Status</th>
							<th>Tanggal Pembuatan</th>
						</thead>
						<tbody>
							@foreach($bpjses as $bpjs)
							<tr>
								<td>{{ $bpjs->id_bpjs }}</td>
								<td>{{ $bpjs->nama_bpjs }}</td>
								@if($bpjs->status  == '0')
								<td>Aktif</td>
								@endif
								@if($bpjs->status  == '1')
								<td>Tidak Aktif</td>
								@endif
								<td>{{ $bpjs->tanggal_pembuatan }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{ URL::asset('asset/js/jquery-2.2.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('asset/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('asset/js/datatables.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#table_bpjs').DataTable();
			});
		</script>
	</body>
	</html>