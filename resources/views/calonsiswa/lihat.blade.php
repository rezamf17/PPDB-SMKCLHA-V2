@extends('layouts.temp')
@section('title')
Detail
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Detail Pendaftaran Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Detail</li>
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
			Detail Data File Calon Siswa
		</div>
		<div class="card-body">
			<table id="example1" class="table">
				<tbody>
					<tr>
						<th>Nama</th>
						<td>{{$data->user->name}}</td>
					</tr>
					<tr>
						<th>Ijazah</th>
						<td>
							<div class="embed-responsive embed-responsive-1by1">
							  <iframe class="embed-responsive-item" src="{{url('uploads/'.$data->ijazah)}}"></iframe>
							</div>
						</td>
						<td><a href="{{url('downloadIjazah/'.$data->ijazah)}}" class="btn btn-primary">Download</a>
							<a onclick="window.open('{{url('uploads/'.$data->ijazah)}}');" class="btn btn-success">Lihat</a>
						</td>
					</tr>
					<tr>
						<th>Kartu Keluarga</th>
						<td>
							<div class="embed-responsive embed-responsive-1by1">
							  <iframe class="embed-responsive-item" src="{{url('uploads/'.$data->kk)}}"></iframe>
							</div>
						</td>
						<td><a href="{{url('downloadIjazah/'.$data->kk)}}" class="btn btn-primary">Download</a>
						<a onclick="window.open('{{url('uploads/'.$data->kk)}}');" class="btn btn-success">Lihat</a>
						</td>
					</tr>
					<tr>
						<th>Akte</th>
						<td>
							<div class="embed-responsive embed-responsive-1by1">
							  <iframe class="embed-responsive-item" src="{{url('uploads/'.$data->akte)}}"></iframe>
							</div>
						</td>
						<td><a href="{{url('downloadIjazah/'.$data->akte)}}" class="btn btn-primary">Download</a>
						<a onclick="window.open('{{url('uploads/'.$data->akte)}}');" class="btn btn-success">Lihat</a>
						</td>
					</tr>
					<tr>
						<th>Surat Keterangan Kelakuan Baik</th>
						<td>
							<div class="embed-responsive embed-responsive-1by1">
							  <iframe class="embed-responsive-item" src="{{url('uploads/'.$data->skkb)}}"></iframe>
							</div>
						</td>
						<td><a href="{{url('downloadIjazah/'.$data->skkb)}}" class="btn btn-primary">Download</a>
						<a onclick="window.open('{{url('uploads/'.$data->skkb)}}');" class="btn btn-success">Lihat</a>
						</td>
					</tr>
					<tr>
						<th>Bukti Pembayaran</th>
						<td>
							<div class="embed-responsive embed-responsive-1by1">
							  <iframe class="embed-responsive-item" src="{{url('uploads/'.$data->bukti_tf)}}"></iframe>
							</div>
						</td>
						<td><a href="{{url('downloadIjazah/'.$data->bukti_tf)}}" class="btn btn-primary">Download</a>
						<a onclick="window.open('{{url('uploads/'.$data->bukti_tf)}}');" class="btn btn-success">Lihat</a>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
	@endsection