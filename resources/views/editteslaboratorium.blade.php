<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<!-- 	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/bootstrap/css/bootstrap.min.css') }}"> -->
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
				<a href="#!user"><img class="circle" src="{{ URL::asset('/image/iconperawat.png') }}"></a>
				<a href="#!name"><span class="white-text name">LABORAN</span></a>
			</div>
		</li>
		<li><a href="{{URL('laboran')}}" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<!-- <li><a href="{{URL('pemeriksaan')}}" class="waves-effect" ><i class="material-icons">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li> -->
		<!-- <li>
			<a class="waves-effect" href="{{URL('rujukan')}}">PERUJUKAN PASIEN
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div> -->
		<!-- <li>
			<a class="waves-effect"  href="{{URL('teslab')}}">LIHAT TES LAB DALAM
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div> -->

		<li>
			<a class="waves-effect active" href="{{URL('resep')}}">PENGELOLAAN TES LAB
				<i class="material-icons active">assignment</i>
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
			<form class="col s11 offset-s2" method="POST" action="{{ url('/update/teslaboratorium/'.$datateslabs->id_tes_laboran_dalam) }}">
				{{method_field('put')}}
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">DATA TES LABORATORIUM</h2>
				<div class="row">
					<div class="input-field col s10">
						<select name="id_pelayanan" disabled>
							@foreach($pelayanans as $pelayanan)
							<option {{($datateslabs->id_pelayanan==$pelayanan->id_pelayanan)?'selected':''}} value="{{$pelayanan->id_pelayanan}}">{{$pelayanan->id_pelayanan}}</option>
							@endforeach
						</select>		
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<p>Tanggal Tes</p>
						<input type="date" name="tanggal_tes" value="{{$datateslabs->tanggal_tes}}" required>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" class="validate" name="hemoglobin" value="{{$datateslabs->hemoglobin}}">
						<label for="icon_telephone">Hemoglobin</label>
					</div>
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" class="validate" name="leukosit" value="{{$datateslabs->leukosit}}">
						<label for="icon_telephone">Leukosit</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" class="validate" name="trombosit" value="{{$datateslabs->trombosit}}">
						<label for="icon_telephone">trombosit</label>
					</div>
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" class="validate" name="hematoplit" value="{{$datateslabs->hematoplit}}">
						<label for="icon_telephone">Hematoplit</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" class="validate" name="darah_gda" value="{{$datateslabs->darah_gda}}">
						<label for="icon_telephone">Darah GDA</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button><br>
						<a href="{{URL('teslaboratorium')}}" class="btn btn-primary">
							BATAL
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- 	<script type="text/javascript" src="{{ URL::asset('asset/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('asset/js/jquery-1.11.1.min.js') }}"></script> -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function(){$(".button-collapse").sideNav();});
		$(document).ready(function() {
			$('select').material_select();
		});
		$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
</script>
</body>
</html>