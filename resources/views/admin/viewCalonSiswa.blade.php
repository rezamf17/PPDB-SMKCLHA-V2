@extends('layouts.temp')
@section('title')
Data Calon Siswa
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Calon Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Calon Siswa</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	@endsection
	@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Data Calon Siswa</h3>
			<div class="float-right">
				<a href="{{ url('cetak/'.$vCalonSiswa->id) }}" class="btn btn-success"><i class="fa fa-print"></i>Print</a>
				<a href="{{ url('calonsiswa') }}" class="btn btn-default"><i class="fa fa-undo btn-sm"></i>Kembali</a>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table">
				{{-- @foreach ($vCalonSiswa as $item) --}}
				<tbody>
					<tr>
						<th>Nama Lengkap</th>
						<td>:{{$vCalonSiswa->nama_lengkap}}</td>
					</tr>
					<tr>
						<th>Jenis Kelamin</th>
						<td>:{{$vCalonSiswa->jenis_kelamin}}</td>
					</tr>
					<tr>
						<th>NISN</th>
						<td>:{{ $vCalonSiswa->nisn}}</td>
					</tr>
					<tr>
						<th>No. Ujian Nasional</th>
						<td>:{{ $vCalonSiswa->no_ujian}}</td>
					</tr>
					<tr>
						<th>NIK</th>
						<td>:{{ $vCalonSiswa->nik}}</td>
					</tr>
					<tr>
						<th>Nama Sekolah Asal</th>
						<td>:{{ $vCalonSiswa->nama_sekolah_asal}}</td>
					</tr>
					<tr>
						<th>Tempat, Tanggal Lahir</th>
						<td>:{{ $vCalonSiswa->ttl}}</td>
					</tr>
					<tr>
						<th>Agama</th>
						<td>:{{ $vCalonSiswa->agama}}</td>
					</tr>
					<tr>
						<th>Tinggi Badan</th>
						<td>:{{ $vCalonSiswa->tinggi_badan}}</td>
					</tr>
					<tr>
						<th>Berat Badan</th>
						<td>:{{ $vCalonSiswa->berat_badan}}</td>
					</tr>
					<tr>
						<th>Jumlah Saudara Kandung</th>
						<td>:{{ $vCalonSiswa->jumlah_saudara_kandung}}</td>
					</tr>
					<tr>
						<th>No. Telp Rumah</th>
						<td>:{{ $vCalonSiswa->no_telp}}</td>
					</tr>
					<tr>
						<th>No. HP</th>
						<td>:{{ $vCalonSiswa->no_hp}}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>:{{ $vCalonSiswa->email}}</td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td>:{{ $vCalonSiswa->alamat}}</td>
					</tr>
					<tr>
						<th>Alat Transport Ke Sekolah</th>
						<td>:{{ $vCalonSiswa->alat_transport}}</td>
					</tr>
					<tr>
						<th>Tinggal Dengan Siapa</th>
						<td>:{{ $vCalonSiswa->tinggal}}</td>
					</tr>
					<tr>
						<th>Jarak Tempat Tinggal Ke Sekolah</th>
						<td>:{{ $vCalonSiswa->jarak}}</td>
					</tr>
					<tr>
						<th>Waktu Tempuh Berangkat Ke Sekolah</th>
						<td>:{{ $vCalonSiswa->waktu}}</td>
					</tr>
					<tr>
						<th>Nama Ayah</th>
						<td>:{{ $vCalonSiswa->nama_ayah}}</td>
					</tr>
					<tr>
						<th>Pekerjaan Ayah</th>
						<td>:{{ $vCalonSiswa->pekerjaan_ayah}}</td>
					</tr>
					<tr>
						<th>Pendidikan Ayah</th>
						<td>:{{ $vCalonSiswa->pendidikan_ayah}}</td>
					</tr>
					<tr>
						<th>Penghasilan Ayah</th>
						<td>:{{ $vCalonSiswa->penghasilan_ayah}}</td>
					</tr>
					<tr>
						<th>Tahun Lahir Ayah</th>
						<td>:{{ $vCalonSiswa->tahun_lahir_ayah}}</td>
					</tr>
					<tr>
						<th>Nama Ibu</th>
						<td>:{{ $vCalonSiswa->nama_ibu}}</td>
					</tr>
					<tr>
						<th>Pekerjaan Ibu</th>
						<td>:{{ $vCalonSiswa->pekerjaan_ibu}}</td>
					</tr>
					<tr>
						<th>Pendidikan Ibu</th>
						<td>:{{ $vCalonSiswa->pendidikan_ibu}}</td>
					</tr>
					<tr>
						<th>Penghasilan Ibu</th>
						<td>:{{ $vCalonSiswa->penghasilan_ibu}}</td>
					</tr>
					<tr>
						<th>Tahun Lahir Ibu</th>
						<td>:{{ $vCalonSiswa->tahun_lahir_ibu}}</td>
					</tr>
					<tr>
						<th>Nama Wali</th>
						<td>:{{ $vCalonSiswa->nama_wali}}</td>
					</tr>
					<tr>
						<th>Pekerjaan Wali</th>
						<td>:{{ $vCalonSiswa->pekerjaan_wali}}</td>
					</tr>
					<tr>
						<th>Pendidikan Wali</th>
						<td>:{{ $vCalonSiswa->pendidikan_wali}}</td>
					</tr>
					<tr>
						<th>Penghasilan Wali</th>
						<td>:{{ $vCalonSiswa->penghasilan_wali}}</td>
					</tr>
					<tr>
						<th>Tahun Lahir Wali</th>
						<td>:{{ $vCalonSiswa->tahun_lahir_wali}}</td>
					</tr>
					<tr>
						<th>Jenis Prestasi</th>
						<td>:{{ $vCalonSiswa->jenis_prestasi}}</td>
					</tr>
					<tr>
						<th>Tingkat</th>
						<td>:{{ $vCalonSiswa->tingkat}}</td>
					</tr>
					<tr>
						<th>Nama Prestasi</th>
						<td>:{{ $vCalonSiswa->nama_prestasi}}</td>
					</tr>
					<tr>
						<th>Tahun</th>
						<td>:{{ $vCalonSiswa->tahun}}</td>
					</tr>
					<tr>
						<th>Penyelenggara</th>
						<td>:{{ $vCalonSiswa->penyelenggara}}</td>
					</tr>
				</tbody>
				{{-- @endforeach --}}

			</table>
		</div>
		<!-- /.card-body -->

	</div>
	@endsection