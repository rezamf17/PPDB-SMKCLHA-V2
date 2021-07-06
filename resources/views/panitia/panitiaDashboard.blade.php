@extends('layouts.temp')
@section('title')
Dashboard Panitia
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard Panitia</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
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
			Data File Upload Calon Siswa
		</div>
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
					<caption>table title and/or explanatory text</caption>
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Calon Siswa</th>
							<th>Ijazah</th>
							<th>Kartu Keluarga</th>
							<th>Akte Kelahiran</th>
							<th>SKKB</th>
							<th>Bukti Transfer</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($files as $element)
						<tr>
							<td>{{ $loop->iteration}}</td>
							<td>{{ $element->user->name}}</td>
							<td>
								@if ($element->ijazah != null)
								<i class="fa fa-check" style="color:green"></i>
								@else
								<i class="fa fa-times" style="color:red"></i>
								@endif
							</td>
							<td>@if ($element->kk != null)
								<i class="fa fa-check" style="color:green"></i>
								@else
								<i class="fa fa-times" style="color:red"></i>
								@endif
							</td>
							<td>@if ($element->akte != null)
								<i class="fa fa-check" style="color:green"></i>
								@else
								<i class="fa fa-times" style="color:red"></i>
								@endif
							</td>
							<td>@if ($element->skkb != null)
								<i class="fa fa-check" style="color:green"></i>
								@else
								<i class="fa fa-times" style="color:red"></i>
								@endif
							</td>
							<td>@if ($element->bukti_tf != null)
								<i class="fa fa-check" style="color:green"></i>
								@else
								<i class="fa fa-times" style="color:red"></i>
								@endif
							</td>
							<td>{{$element->user->status}}</td>
							<th>
								<a href="{{url('lihat/'.$element->id)}}" class="btn btn-success">Lihat</a>
							</th>
						</tr>
						
						@endforeach
					</tbody>
				</table>
		</div>
	</div>
		@endsection