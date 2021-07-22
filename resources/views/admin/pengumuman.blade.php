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
  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
  @endif
  <a href="{{ url('pengumuman/buatPengumuman') }}" title="" class="btn btn-primary"><i class="fas fa-bullhorn mr-1"></i>Tambah Data Pengumuman</a>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pengumuman</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengumuman as $element)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$element->judul}}</td>
            <th>
              <a class="btn btn-success" href="{{ url('pengumuman/editPengumuman/'.$element->id) }}"><i class="fa fa-edit"></i>Edit</a>
              <form action="{{url('pengumuman', $element->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-trash"></i>Hapus
                </button>
              </form>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @foreach ($pengumuman as $element)
 {{--  <div class="card">
    <div class="card-header">
      <h3>{{$element->judul}}</h3>
    </div>
    <div class="card-body">
      {!!$element->isi!!}
    </div>

  </div> --}}
  @endforeach
  
  @endsection