<!DOCTYPE html>
<html>
<head>
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
				<a href="#!user"><img class="circle" src="{{ URL::asset('/image/iconperawat.png') }}"></a>
				<a href="#!name"><span class="white-text name">PERAWAT</span></a>
			</div>
		</li>
		<li><a href="{{URL('tu')}}" class="waves-effect active" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li><a href="{{URL('datakamar')}}" class="waves-effect" ><i class="material-icons active">face</i>PENGELOLAAN DATA KAMAR</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect" href="{{URL('lihatpegawai')}}" >LIHAT DATA PEGAWAI
				<i class="material-icons">assignment</i>
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
	<div class="container" style="text-align:center;">
		<div class="row">
			<div class="col s10 offset-s2">
				<h1 class="welcome-user">
					SELAMAT DATANG <br> <span style="color:#004d40;">TATA USAHA</span>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col s10 offset-s2">
				<a class="waves-effect waves-light btn-large">
					<i class="material-icons right">face</i>PENGELOLAAN DATA KAMAR
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col s10 offset-s2">
				<a class="waves-effect waves-light btn-large">
					<i class="material-icons right">language</i>LIHAT DATA PEGAWAI
				</a>
				<a class="waves-effect waves-light btn-large">
					<i class="material-icons right">work</i>LIHAT DATA BPJS
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12 offset-s1">
				<h1 class="welcome-user-1">
					PUSKESMAS-<span style="color:#004d40;">PATRANG.COM </span>
				</h1>
			</div>
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
</body>
</html>