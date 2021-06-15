@extends('layouts.temp')
@section('title')
Edit Data Akun
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit Data Akun</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Edit Data Akun</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	@endsection
	@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Edit Data Akun</h3>
      <div class="float-right">
        <a href="{{url('admin')}}" class="btn btn-default" title=""><i class="fa fa-undo btn-sm"></i>Back</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
     <div class="modal-body">
      <form action="{{url('admin/'.$users->id)}}" method="POST">

        <div class="form-group">
          @method('patch')
          @csrf
          <label>Nama Lengkap</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$users->name}}">
          @error('nama_barang')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email" value="{{$users->email}}">
          @error('jumlah')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label>Level</label>
          <select name="role" class="form-control">
           <option value="1" @if($users->role == 1) selected @endif>Admin</option>
          <option value="2" @if($users->role == 2) selected @endif>Calon Siswa</option>
          </select>
          @error('role')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" placeholder="Password">
          @error('jumlah')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label>Konfirmasi Password</label>
          <input type="password" name="confirmpassword" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" placeholder="Konfirmasi Password">
          @error('jumlah')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <input type="submit" class="btn btn-primary" value="Edit Data" name="">
      </form>
    </div>
  </div>
</div>

@endsection
