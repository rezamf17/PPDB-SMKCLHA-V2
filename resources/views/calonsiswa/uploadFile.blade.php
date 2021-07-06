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
						<input type="file" name="kk" class="form-control-file" >
						*File harus berformat png, jpg, jpeg, pdf
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Akte Kelahiran</label>
						<input type="file" name="akte" class="form-control-file" >
						*File harus berformat png, jpg, jpeg, pdf
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Surat Keterangan Kelakuan Baik (Dari Sekolah Asal)</label>
						<input type="file" name="skkb" class="form-control-file" >
						*File harus berformat png, jpg, jpeg, pdf
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Bukti Pembayaran</label>
						<input type="file" name="bukti_tf" class="form-control-file" required>
						*File harus berformat png, jpg, jpeg, pdf
					</div>
					<br>
					@if (DB::table('files')->where('id_user', Auth::user()->id)->exists())
					<p>Kamu Sudah Upload File<i class="fa fa-check" style="color:green"></i></p>
					@else
					<p>Kamu Belum Upload File<i class="fa fa-times" style="color:red"></i></p>
					@endif


					@if (DB::table('files')->where('id_user', Auth::user()->id)->exists())
					<a href="#" class="btn btn-primary" onclick="alert('Kamu sudah upload file, jika salah upload file, klik tombol Reset');">Upload</a>
					@else
					<button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i>Upload</button>
					@endif
					<a href="{{url('home')}}" class="btn btn-default">Batal</a>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-sm">
					<i class="fa fa-undo"></i>Reset
				</button>
				</form>	
				{{-- MODAL --}}
			</div>
		</div>
		<div class="modal fade" id="modal-sm">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Reset</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Apa Kamu Yakin Ingin Mengulangi Upload File?</p>
							</div>
							<div class="modal-footer justify-content-between">
								<a href="{{url('home')}}" class="btn btn-default">Batal</a>
								<form action="{{url('reset/'.Auth::user()->id)}}" method="post" accept-charset="utf-8">
									@method('delete')
									@csrf
									<button type="submit" class="btn btn-primary">Ya</button>
								</form>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
		@endsection