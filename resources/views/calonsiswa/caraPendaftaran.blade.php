@extends('layouts.temp')
@section('title')
Cara Daftar Lewat Laptop/HP
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Cara Daftar</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Cara Daftar Lewat Laptop/HP</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	@endsection
	@section('content')
	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			<p>1. Klik 'DAFTAR SEKARANG'</p>
			<img src="{{asset('gambar/screenShot/homeArrow.png')}}" class="gambar1">
			<p>2. Silahkan isi form yang telah disediakan. Lalu, klik 'DAFTAR'</p>
			<img src="{{asset('gambar/screenShot/daftarsekarangArrow.png')}}" class="gambar1">
			<p>3. Setelah berhasil akan muncul tampilan menu utama. Pilih Menu 'Formulir' untuk mengisi Formulir</p>
			<img src="{{asset('gambar/screenShot/menu.png')}}" class="gambar1">
			<p>4. Setelah klik menu Formulir, isikan dengan lengkap Formulir data diri Anda.</p>
			<img src="{{asset('gambar/screenShot/formulirArrow.png')}}" class="gambar1">
			<p>5. Setelah mengisi Formulir dengan lengkap. Klik Simpan.</p>
			<img src="{{asset('gambar/screenShot/simpanformulir.png')}}" class="gambarSimpan">
			<p>6. Setelah itu akan kembali ke menu utama. Klik Menu 'Upload File'</p>
			<img src="{{asset('gambar/screenShot/menu.png')}}" class="gambar1">
			<p>7. Upload file yang diminta, lalu klik tombol 'Upload'</p>
			<img src="{{asset('gambar/screenShot/uploadfile.png')}}" class="gambar1">
			<p>8. Setelah file terupload tunggu sampai status terganti menjadi 'Diterima'</p>
		</div>
	</div>
	
	@endsection