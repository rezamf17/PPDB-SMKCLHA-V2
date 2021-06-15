@extends('layouts.temp')
@section('title')
Pengumuman
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Pengumuman</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Pengumuman</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	@endsection
@section('content')
<a href="{{ url('home') }}" class="btn btn-default"><i class="fa fa-undo"></i>Kembali</a>
@foreach ($pengumuman as $element)
	<div class="card">
		<div class="card-header">
			<h3>{{$element->judul}}</h3>
		</div>
			<div class="card-body">
				{!!$element->isi!!}
			</div>
	</div>
@endforeach
	
	
@endsection
