<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Pendaftaran</title>
	{{-- <link rel="stylesheet" href="{{asset('css/cetak.css')}}"> --}}
	<style type="text/css" media="screen">
		th{
			text-align: left;
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

	<table>
		<tbody>
			@foreach ($cetakform as $element)
			<tr>
				<th style="font-family: sans-serif;">Nama Lengkap</th>
				<td>:{{ $element->nama_lengkap }}</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td>:{{ $element->jenis_kelamin}}</td>
			</tr>
			<tr>
				<th>NISN</th>
				<td>:{{ $element->nisn}}</td>
			</tr>
			<tr>
				<th>No. Ujian Nasional</th>
				<td>:{{ $element->no_ujian}}</td>
			</tr>
			<tr>
				<th>NIK</th>
				<td>:{{ $element->nik}}</td>
			</tr>
			<tr>
				<th>Nama Sekolah Asal</th>
				<td>:{{ $element->nama_sekolah_asal}}</td>
			</tr>
			<tr>
				<th>Tempat, Tanggal Lahir</th>
				<td>:{{ $element->ttl}}</td>
			</tr>
			<tr>
				<th>Agama</th>
				<td>:{{ $element->agama}}</td>
			</tr>
			<tr>
				<th>Tinggi Badan</th>
				<td>:{{ $element->tinggi_badan}}</td>
			</tr>
			<tr>
				<th>Berat Badan</th>
				<td>:{{ $element->berat_badan}}</td>
			</tr>
			<tr>
				<th>Jumlah Saudara Kandung</th>
				<td>:{{ $element->jumlah_saudara_kandung}}</td>
			</tr>
			<tr>
				<th>No. Telp Rumah</th>
				<td>:{{ $element->no_telp}}</td>
			</tr>
			<tr>
				<th>No. HP</th>
				<td>:{{ $element->no_hp}}</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>:{{ $element->email}}</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td>:{{ $element->alamat}}</td>
			</tr>
			<tr>
				<th>Alat Transport Ke Sekolah</th>
				<td>:{{ $element->alat_transport}}</td>
			</tr>
			<tr>
				<th>Tinggal Dengan Siapa</th>
				<td>:{{ $element->tinggal}}</td>
			</tr>
			<tr>
				<th>Jarak Tempat Tinggal Ke Sekolah</th>
				<td>:{{ $element->jarak}}</td>
			</tr>
			<tr>
				<th>Waktu Tempuh Berangkat Ke Sekolah</th>
				<td>:{{ $element->waktu}}</td>
			</tr>
			<tr>
				<th>Nama Ayah</th>
				<td>:{{ $element->nama_ayah}}</td>
			</tr>
			<tr>
				<th>Pekerjaan Ayah</th>
				<td>:{{ $element->pekerjaan_ayah}}</td>
			</tr>
			<tr>
				<th>Pendidikan Ayah</th>
				<td>:{{ $element->pendidikan_ayah}}</td>
			</tr>
			<tr>
				<th>Penghasilan Ayah</th>
				<td>:{{ $element->penghasilan_ayah}}</td>
			</tr>
			<tr>
				<th>Tahun Lahir Ayah</th>
				<td>:{{ $element->tahun_lahir_ayah}}</td>
			</tr>
			<tr>
				<th>Nama Ibu</th>
				<td>:{{ $element->nama_ibu}}</td>
			</tr>
			<tr>
				<th>Pekerjaan Ibu</th>
				<td>:{{ $element->pekerjaan_ibu}}</td>
			</tr>
			<tr>
				<th>Pendidikan Ibu</th>
				<td>:{{ $element->pendidikan_ibu}}</td>
			</tr>
			<tr>
				<th>Penghasilan Ibu</th>
				<td>:{{ $element->penghasilan_ibu}}</td>
			</tr>
			<tr>
				<th>Tahun Lahir Ibu</th>
				<td>:{{ $element->tahun_lahir_ibu}}</td>
			</tr>
			<tr>
				<th>Nama Wali</th>
				<td>:{{ $element->nama_wali}}</td>
			</tr>
			<tr>
				<th>Pekerjaan Wali</th>
				<td>:{{ $element->pekerjaan_wali}}</td>
			</tr>
			<tr>
				<th>Pendidikan Wali</th>
				<td>:{{ $element->pendidikan_wali}}</td>
			</tr>
			<tr>
				<th>Penghasilan Wali</th>
				<td>:{{ $element->penghasilan_wali}}</td>
			</tr>
			<tr>
				<th>Tahun Lahir Wali</th>
				<td>:{{ $element->tahun_lahir_wali}}</td>
			</tr>
			<tr>
				<th>Jenis Prestasi</th>
				<td>:{{ $element->jenis_prestasi}}</td>
			</tr>
			<tr>
				<th>Tingkat</th>
				<td>:{{ $element->tingkat}}</td>
			</tr>
			<tr>
				<th>Nama Prestasi</th>
				<td>:{{ $element->nama_prestasi}}</td>
			</tr>
			<tr>
				<th>Tahun</th>
				<td>:{{ $element->tahun}}</td>
			</tr>
			<tr>
				<th>Penyelenggara</th>
				<td>:{{ $element->penyelenggara}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>