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
				<a href="{{ url('cetakCalonSiswa') }}" class="btn btn-danger"><i class="fa fa-print"></i>Print PDF</a>
				<a href="{{ url('exportDataSiswa') }}" class="btn btn-success"><i class="fa fa-print"></i>Print Excel</a>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>NISN</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cSiswa as $element)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$element->nama_lengkap}}</td>
						<td>{{$element->jenis_kelamin}}</td>
						<td>{{$element->nisn}}</td>
						<th>
							<a class="btn btn-primary" href="{{ url('viewCalonSiswa/'. $element->id) }}" title=""><i class="fa fa-eye"></i>Lihat</a>
						</th>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	@endsection