<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/styleuser.css') }}">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home</title>
</head>
<body style="background-color:#eceff1;">
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
		<!-- <li><a href="{{URL('pemeriksaan')}}" class="waves-effect active" ><i class="material-icons">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li> -->
		<!-- <li>
			<a class="waves-effect" href="{{URL('rujukan')}}">PERUJUKAN PASIEN
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
			<form class="col s11 offset-s2" method="POST" action="{{ url('add/teslab') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">TAMBAH TES LAB</h2>

				<div class="row">
					<div class="input-field col s3">
						<select name="id_pelayanan" required>
							@foreach($pelayanans as $pelayanan)
							<option value="{{$pelayanan->id_pelayanan}}">{{$pelayanan->id_pelayanan}}</option>
							@endforeach
						</select>
						<label for="icon_telephone" class="brown-text darken-4">PILIH ID PENDAFTARAN</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<p>Tanggal Tes</p>
						<input type="date" name="tanggal_tes" required>
					</div>
				</div>
				<label> Darah Lengkap</label>
				<div class="row">
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" name="hemoglobin" required>
						<label for="Alamat" class="brown-text darken-4">Hemoglobin</label>
					</div>
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" name="leukosit" required>
						<label for="Alamat" class="brown-text darken-4">Leukosit</label>
					</div>
					
				</div>
				<div class="row">
				<div class="input-field col s5">
						<input id="icon_telephone" type="number" name="trombosit" required>
						<label for="Alamat" class="brown-text darken-4">Trombosit</label>
					</div>
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" name="hematoplit" required>
						<label for="Alamat" class="brown-text darken-4">Hematoplit</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s5">
						<input id="icon_telephone" type="number" name="darah_gda" required>
						<label for="Alamat" class="brown-text darken-4">Darah GDA</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 offset-s2">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button> <br>
						<button type="reset" class="btn btn-primary btn-block" >BATAL</button>
					</div>
				</div>
			</form>
		</div>
	</div>
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