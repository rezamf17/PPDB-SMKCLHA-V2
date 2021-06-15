<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Pendaftaran</title>
	<style type="text/css" media="screen">
		th{
			text-align: left;
			border: 1px solid black;
		}
		td{
			border: 1px solid black;
		}
		table{
			font-size: 14px;
			font-family: sans-serif;
			text-align: left;
		}
		img{
			height: 90px;
			width: 100px;
			position: absolute;
			margin-top: -45px;
		}
	</style>
</head>
<body>

	<p style="text-align: center;
	font-size: 11px;
	font-weight: bold;
	line-height: 0.5px;">YAYASAN PENDIDIKAN DAN KEWIRAUSAHAAN</p>
	<p style="font-size: 16px;
			font-weight: bold;
			text-align: center;
			line-height: 0.5px;">SMKS CLHA'49 RANCAEKEK</p>
	<P style="font-size: 8px;
			text-align: center;
			line-height: 0.5px;">AKTA NOTARIS H. RUSLAN HERIN ABDULLAH, SH. NO. 13 TAHUN 2010</P>
	<img src="gambar/logoclha.png" alt=""><P style="font-size: 8px;
			text-align: center;
			line-height: 0.5px;">KEPUTUSAN MENTERI HUKUM DAN HAK ASASI MANUSIA RI. NO. AHU-3440.AH.01.04 TAHUN 2011</P>
	<P style="font-size: 8px;
			text-align: center;
			line-height: 0.5px;"> SK PENETAPAN HASIL AKREDITASI BAP-S/M NO. 02.00/313/BAP-SM/SK/X/2014</P>
	<p style="text-align: center;
			font-size: 14px;
			font-weight: bold;
			line-height: 0.5px;">"TERAKREDITASI B"</p>
	<P style="font-size: 8px;
			text-align: center;
			line-height: 0.5px;">Sekretariat : Jl. Pahlawan Muchtar  RT. 05/01 Desa Rancaekek Kulon Kecamatan Rancaekek Kabupaten Bandung 
	</P>
	<p style="font-size: 9px;
			text-align: center;
			line-height: 0.5px;">Kode Pos 40394 &#9742; (022) 779166</p>
	<hr>
	<br>

	<table style="border: 1px solid black; width: 100%;">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Level</th>
				</tr>
				
			</thead>
			@foreach ($cetakDataAkun as $element)
			<tbody>
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$element->name}}</td>
					<td>{{$element->email}}</td>
					<td>@if ($element->role == 1)
							Admin
							@else
							Calon Siswa
							@endif</td>
				</tr>
			</tbody>
		@endforeach
	</table>
</body>
</html>