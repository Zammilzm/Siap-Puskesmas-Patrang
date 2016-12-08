<!DOCTYPE html>
<html>
<head>
	<title>KARTU PASIEN</title>
</head>
<body>
	<div style="float: left;margin-left: 50px">
        <div style="border: solid 5px #2c3e50;width: 440px;height: 30px; background: #47C9AF; padding: 15px; margin: 0; text-align: center; line-height: 23px;
        color: white; font-size: 18px;font-size: 20pt">KARTU BEROBAT PASIEN</div>
        <div id="Ino" style="overflow:auto;border: solid 5px #2c3e50; width: 440px;height: 310px; background: #E8FFFF; padding: 15px; margin: 0; text-align: center; line-height: 23px;
        color: black; font-size: 18px">
        <div style="margin-top">
          <h2>Puskesmas Patrang </h2>
          <h4>jalan kaca piring no.14 Patrang-Jember</h4>
          <hr>
          @foreach($dataPasien as $pasien)
          <h4 style="text-align: justify">ID PASIEN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 
              {{$pasien->id_pasien}}
          </h4>
          <h4 style="text-align: justify">NAMA PASIEN = 
              {{$pasien->nama_pasien}}
          </h4>
          <h4 style="text-align: justify">ALAMAT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 
              {{$pasien->alamat}}
          </h4>
          @endforeach
      </div>
      
  </div>

</body>
</html>