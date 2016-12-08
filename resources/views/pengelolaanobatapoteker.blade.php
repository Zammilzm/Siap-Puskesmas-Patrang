<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/styleuser.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/sweetalert.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/datatables.min.css') }}">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>APOTEKER</title>
</head>
<body style="background-color:#cfd8dc;">
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	<ul id="slide-out" class="side-nav fixed">
		<li>
			<div class="userView">
				<div class="background">
					<img src="{{ URL::asset('/image/angga.jpg') }}">
				</div>
				<a href="#!user"><img class="circle" src="{{ URL::asset('/image/apoteker.png') }}"></a>
				<a href="#!name"><span class="white-text name">PERAWAT</span></a>
			</div>
		</li>
		<li><a href="{{URL('perawat')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect active" href="{{URL('resep')}}">RESEP OBAT APOTEKER
				<i class="material-icons active">assignment</i>
			</a>
		</li>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col s12 offset-s2">
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">DAFTAR RESEP OBAT</h2>
				<!-- @if(Session::has('flash_message'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					{{Session::get('flash_message')}}
				</div>
				@endif -->
				<table class="table table-condensed table-hover striped" id="table_obat">
					<thead>
						<th>ID Resep</th>
						<th>ID Pelayanan</th>
						<th>Nama Pasien</th>
						<th>Umur</th>
						<th>Diagnosa Penyakit</th>
						<th>Resep Obat</th>
						<th>Resep Apoteker</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						@foreach($reseps as $resep)
						<tr>
							<td>{{ $resep->id_resep }}</td>
							<td>{{ $resep->id_pelayanan}}</td>
							<td>{{ $resep->pelayanan->pendaftaran->pasien->nama_pasien}}</td>
							<td>{{ $resep->pelayanan->pendaftaran->pasien->umur}}</td>
							<td>{{ $resep->pelayanan->diagnosa_penyakit }}</td>
							<td>{{ $resep->resep_obat }}</td>
							<td>{{ $resep->resep_tersedia }}</td>
							<td>
								<a href="/edit/apotekers/{{$resep->id_resep}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="RESEP OBAT">	
									<i class="material-icons">event_available</i>
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
			$('#table_obat').DataTable();
		});
	</script>
	<script type="text/javascript" src="{{ URL::asset('asset/js/sweetalert.js') }}"></script>
</body>
</html>