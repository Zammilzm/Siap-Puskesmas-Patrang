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
				<a href="#!name"><span class="white-text name">LABORAN</span></a>
			</div>
		</li>
		<li><a href="{{URL('laboran')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<!-- <li><a href="{{URL('pemeriksaan')}}" class="waves-effect active" ><i class="material-icons active">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li> -->
		<!-- <li>
			<a class="waves-effect" href="{{URL('rujukan')}}" >PERUJUKAN PASIEN
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div> -->
		<!-- <li>
			<a class="waves-effect" href="{{URL('teslab')}}">LIHAT TES LAB DALAM
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div> -->

		<li>
			<a class="waves-effect" href="{{URL('teslaboratorium')}}">PENGELOLAAN TES LAB
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<!-- <li>
			<a class="waves-effect" href="{{URL('rawatinap')}}">PENGELOLAAN RAWAT INAP
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div> -->
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<div class="col s12 offset-s2">
				<h2 style="text-align:center; padding:0 0 30px 0; text-decoration:underline;">TES LABORATORIUM</h2>
				@if(Session::has('flash_message'))
				<div class="row">
					<div class="card-panel teal lighten-2 chip">
							{{Session::get('flash_message')}}
						<i class="close material-icons">close</i>
					</div>
				</div>
				@endif
				<a href="{{URL('formteslaboratorium')}}" class="btn btn-primary">TAMBAH</a>
				<table class="table table-condensed table-hover striped" id="table_periksa">
					<thead>
						<th>ID Tes Lab</th>
						<th>ID Pelayanan</th>
						<th>Nama Pasien</th>
						<th>Diagnosa Penyakit</th>
						<th>Tanggal Tes</th>
						<th>Hemoglobin</th>
						<th>Leukosit</th>
						<th>Trombosit</th>
						<th>Hematoplit</th>
						<th>Darah GDA</th>
					</thead>
					<tbody>
						@foreach($teslabs as $teslab)
						<tr>
							<td>{{ $teslab->id_tes_laboran_dalam }}</td>
							<td>{{ $teslab->id_pelayanan}}</td>
							<td>{{ $teslab->pelayanan->pendaftaran->pasien->nama_pasien}}</td>
							<td>{{ $teslab->pelayanan->diagnosa_penyakit}}</td>
							<td>{{ $teslab->tanggal_tes}}</td>
							<td>{{ $teslab->hemoglobin }}</td>
							<td>{{ $teslab->leukosit }}</td>
							<td>{{ $teslab->trombosit }}</td>
							<td>{{ $teslab->hematoplit }}</td>
							<td>{{ $teslab->darah_gda }}</td>
							<td>
								<a href="/edit/teslaboratorium/{{$teslab->id_tes_laboran_dalam}}" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="UPDATE">
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
<!-- 	<script type="text/javascript" src="{{URL::asset('asset/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('asset/css/jquery-1.11.1.min.js') }}"></script> -->
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
			$('#table_periksa').DataTable();
		});
	</script>
</body>
</html>