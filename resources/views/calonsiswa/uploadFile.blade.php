@extends('layouts.temp')
@section('title')
Upload File
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Upload File Pendaftaran Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Upload File</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	@endsection
	@section('content')
	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
	@endif
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><i class="fas fa-folder-open mr-1"></i>Upload File</h3>
		</div>
		{{-- <div class="custom-file">
			<input type="file" class="custom-file-input" name="">
			 <label class="custom-file-label" for="customFile">Pilih file</label>
			</div> --}}
			<form>
				<div class="form-group">
					<label for="exampleFormControlFile1">Ijazah</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Kartu Keluarga</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Akte Kelahiran</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Bukti Pendaftaran</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
			</form>
		</div>
		@endsection