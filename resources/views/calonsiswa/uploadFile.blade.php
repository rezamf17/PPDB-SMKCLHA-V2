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
				
			<div class="card-body">
			<form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div style="display: none;">
					<input type="text" value="{{ Auth::user()->id }}" name="id_user">
				</div>
				<div class="form-group">
				    <label for="exampleFormControlFile1">Ijazah</label>
				    <input type="file" name="ijazah" class="form-control-file">
				    *File harus berformat png, jpg, jpeg, pdf
				 </div>
				 <div class="form-group">
				    <label for="exampleFormControlFile1">Kartu Keluarga</label>
				    <input type="file" name="kk" class="form-control-file">
				    *File harus berformat png, jpg, jpeg, pdf
				 </div>
				 <div class="form-group">
				    <label for="exampleFormControlFile1">Akte Kelahiran</label>
				    <input type="file" name="akte" class="form-control-file">
				    *File harus berformat png, jpg, jpeg, pdf
				 </div>
				 <div class="form-group">
				    <label for="exampleFormControlFile1">Surat Keterangan Kelakuan Baik (Dari Sekolah Asal)</label>
				    <input type="file" name="skkb" class="form-control-file">
				    *File harus berformat png, jpg, jpeg, pdf
				 </div>
				 <div class="form-group">
				    <label for="exampleFormControlFile1">Bukti Pembayaran</label>
				    <input type="file" name="bukti_tf" class="form-control-file">
				    *File harus berformat png, jpg, jpeg, pdf
				 </div>
				{{-- <div class="custom-file mb-5">
					<input type="file" class="custom-file-input" name="ijazash">
			 		<label class="custom-file-label" for="customFile">Ijazah</label>
			 		*File harus berformat png, jpg, jpeg, pdf
				</div>
				<div class="custom-file mb-5">
					<input type="file" class="custom-file-input" name="kk">
			 		<label class="custom-file-label" for="customFile">Kartu Keluarga</label>
			 		*File harus berformat png, jpg, jpeg, pdf
				</div>
				<div class="custom-file mb-5">
					<input type="file" class="custom-file-input" name="akte">
			 		<label class="custom-file-label" for="customFile">Akte Kelahiran</label>
			 		*File harus berformat png, jpg, jpeg, pdf
				</div>
				<div class="custom-file mb-5">
					<input type="file" class="custom-file-input" name="skkb">
			 		<label class="custom-file-label" for="customFile">Surat Keterangan Kelakuan Baik (Dari Sekolah Asal)</label>
			 		*File harus berformat png, jpg, jpeg, pdf
				</div>
				<div class="custom-file mb-5">
					<input type="file" class="custom-file-input" name="bukti_tf">
			 		<label class="custom-file-label" for="customFile">Bukti Pembayaran</label>
			 		*File harus berformat png, jpg, jpeg, pdf
				</div> --}}
				<button type="submit" class="btn btn-primary">Upload</button>
				<a href="{{url('home')}}" class="btn btn-default">Batal</a>
			</form>	

			<table id="example1" class="table table-bordered table-striped">
				<caption>table title and/or explanatory text</caption>
				<thead>
					<tr>
						<th>No</th>
						<th>Ijazah</th>
						<th>Kartu Keluarga</th>
						<th>Akte Kelahiran</th>
						<th>SKKB</th>
						<th>Bukti Transfer</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($files as $element)
					<tr>
						<td>{{ $loop->iteration}}</td>
						<td>{{ $element->ijazah}}</td>
						<td>{{ $element->kk}}</td>
						<td>{{ $element->skkb}}</td>
						<td>{{ $element->bukti_tf}}</td>
						<th>
							<a href="{{}}" class="btn btn-success">Lihat</a>
						</th>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		@endsection