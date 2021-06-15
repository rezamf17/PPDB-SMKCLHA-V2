<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Pendaftaran</title>
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
			<tr>
				<th style="font-family: sans-serif;">Nama Lengkap</th>
				<td>:{{ $cetak_siswa->nama_lengkap }}</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td>: {{$cetak_siswa->jenis_kelamin}}</td>
			</tr>
			<tr>
				<th>NISN</th>
				<td>: {{$cetak_siswa->nisn}}</td>
			</tr>
			<tr>
				<th>No. Ujian Nasional</th>
				<td>:{{ $cetak_siswa->no_ujian}}</td>
			</tr>
			<tr>
				<th>NIK</th>
				<td>:{{ $cetak_siswa->nik}}</td>
			</tr>
			<tr>
				<th>Nama Sekolah Asal</th>
				<td>:{{ $cetak_siswa->nama_sekolah_asal}}</td>
			</tr>
			<tr>
				<th>Tempat, Tanggal Lahir</th>
				<td>:{{ $cetak_siswa->ttl}}</td>
			</tr>
			<tr>
				<th>Agama</th>
				<td>:{{ $cetak_siswa->agama}}</td>
			</tr>
			<tr>
				<th>Tinggi Badan</th>
				<td>:{{ $cetak_siswa->tinggi_badan}}</td>
			</tr>
			<tr>
				<th>Berat Badan</th>
				<td>:{{ $cetak_siswa->berat_badan}}</td>
			</tr>
			<tr>
				<th>Jumlah Saudara Kandung</th>
				<td>:{{ $cetak_siswa->jumlah_saudara_kandung}}</td>
			</tr>
			<tr>
				<th>No. Telp Rumah</th>
				<td>:{{ $cetak_siswa->no_telp}}</td>
			</tr>
			<tr>
				<th>No. HP</th>
				<td>:{{ $cetak_siswa->no_hp}}</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>:{{ $cetak_siswa->email}}</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td>:{{ $cetak_siswa->alamat}}</td>
			</tr>
			<tr>
				<th>Alat Transport Ke Sekolah</th>
				<td>:{{ $cetak_siswa->alat_transport}}</td>
			</tr>
			<tr>
				<th>Tinggal Dengan Siapa</th>
				<td>:{{ $cetak_siswa->tinggal}}</td>
			</tr>
			<tr>
				<th>Jarak Tempat Tinggal Ke Sekolah</th>
				<td>:{{ $cetak_siswa->jarak}}</td>
			</tr>
			<tr>
				<th>Waktu Tempuh Berangkat Ke Sekolah</th>
				<td>:{{ $cetak_siswa->waktu}}</td>
			</tr>
			<tr>
				<th>Nama Ayah</th>
				<td>:{{ $cetak_siswa->nama_ayah}}</td>
			</tr>
			<tr>
				<th>Pekerjaan Ayah</th>
				<td>:{{ $cetak_siswa->pekerjaan_ayah}}</td>
			</tr>
			<tr>
				<th>Pendidikan Ayah</th>
				<td>:{{ $cetak_siswa->pendidikan_ayah}}</td>
			</tr>
			<tr>
				<th>Penghasilan Ayah</th>
				<td>:{{ $cetak_siswa->penghasilan_ayah}}</td>
			</tr>
			<tr>
				<th>Tahun Lahir Ayah</th>
				<td>:{{ $cetak_siswa->tahun_lahir_ayah}}</td>
			</tr>
			<tr>
				<th>Nama Ibu</th>
				<td>:{{ $cetak_siswa->nama_ibu}}</td>
			</tr>
			<tr>
				<th>Pekerjaan Ibu</th>
				<td>:{{ $cetak_siswa->pekerjaan_ibu}}</td>
			</tr>
			<tr>
				<th>Pendidikan Ibu</th>
				<td>:{{ $cetak_siswa->pendidikan_ibu}}</td>
			</tr>
			<tr>
				<th>Penghasilan Ibu</th>
				<td>:{{ $cetak_siswa->penghasilan_ibu}}</td>
			</tr>
			<tr>
				<th>Tahun Lahir Ibu</th>
				<td>:{{ $cetak_siswa->tahun_lahir_ibu}}</td>
			</tr>
			<tr>
				<th>Nama Wali</th>
				<td>:{{ $cetak_siswa->nama_wali}}</td>
			</tr>
			<tr>
				<th>Pekerjaan Wali</th>
				<td>:{{ $cetak_siswa->pekerjaan_wali}}</td>
			</tr>
			<tr>
				<th>Pendidikan Wali</th>
				<td>:{{ $cetak_siswa->pendidikan_wali}}</td>
			</tr>
			<tr>
				<th>Penghasilan Wali</th>
				<td>:{{ $cetak_siswa->penghasilan_wali}}</td>
			</tr>
			<tr>
				<th>Tahun Lahir Wali</th>
				<td>:{{ $cetak_siswa->tahun_lahir_wali}}</td>
			</tr>
			<tr>
				<th>Jenis Prestasi</th>
				<td>:{{ $cetak_siswa->jenis_prestasi}}</td>
			</tr>
			<tr>
				<th>Tingkat</th>
				<td>:{{ $cetak_siswa->tingkat}}</td>
			</tr>
			<tr>
				<th>Nama Prestasi</th>
				<td>:{{ $cetak_siswa->nama_prestasi}}</td>
			</tr>
			<tr>
				<th>Tahun</th>
				<td>:{{ $cetak_siswa->tahun}}</td>
			</tr>
			<tr>
				<th>Penyelenggara</th>
				<td>:{{ $cetak_siswa->penyelenggara}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>