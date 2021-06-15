@extends('layouts.temp')
@section('title')
Dashboard
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
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
{{-- <div class="container">
  <h2>Halo Admin, <a id="navbarDropdown" class="nav-link" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}, {{Auth::user()->role}}
</a></h2>  
</div> --}}
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
       <a href="{{route('admin')}}" class="info-box-icon bg-info elevation-1" title=""><i class="fas fa-id-card"></i></a>

        <div class="info-box-content">
          <span class="info-box-text">Data Akun</span>
          <span class="info-box-number">
            {{$disUserCount}}
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
       <a href="{{route('calonsiswa')}}" class="info-box-icon bg-danger elevation-1" title=""><i class="fas fa-user"></i></a>

        <div class="info-box-content">
          <span class="info-box-text">Data Calon Siswa</span>
          <span class="info-box-number">{{$cSiswaCount}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <a href="{{route('pengumuman')}}" class="info-box-icon bg-success elevation-1" title=""><i class="fas fa-bullhorn"></i></a>

        <div class="info-box-content">
          <span class="info-box-text">Pengumuman</span>
          <span class="info-box-number">{{$disPengumumanCount}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  @endsection
