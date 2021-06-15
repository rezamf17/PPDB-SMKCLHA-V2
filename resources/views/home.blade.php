@extends('layouts.temp')
@section('title')
Dashboard
@endsection
@section('content')
<div class="card">
  <div class="content-wrapper">

    <div class="content-header">
     <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h5>Formulir</h5>

              <p>Isi formulir disini untuk melengkapi pendaftaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-person"></i>
            </div>
            @if (DB::table('forms')->where('id_user', Auth::user()->id)->exists())
              <a href="#" class="small-box-footer" onclick="alert('Kamu sudah isi formulir, jika ingin mengganti data pilih menu Ganti Formulir');">Isi Formulir<i class="fas fa-arrow-circle-right"></i></a>
            @else
            <a href="{{ url('forms') }}" class="small-box-footer">Isi Formulir<i class="fas fa-arrow-circle-right"></i></a>
            @endif
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h5>Ganti Formulir</h5>

              <p>Ganti formulir disini apabila ada kesalahan data</p>
            </div>
            <div class="icon">
              <i class="ion ion-settings"></i>
            </div>
             @if(DB::table('forms')->where('id_user', Auth::user()->id)->doesntExist())             
              <a href="#" class="small-box-footer" onclick="alert('Kamu belum isi formulir')";>Cetak Pendaftaran<i class="fas fa-arrow-circle-right" ></i></a>
             @else
            <a href="{{ url('gantiFormulir') }}" class="small-box-footer">Ganti Data<i class="fas fa-arrow-circle-right"></i></a>
            @endif
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h5>Cetak Pendaftaran</h5>

              <p>Cetak Pendaftaran sebagai syarat untuk daftar ulang</p>
            </div>
            <div class="icon">
              <i class="ion ion-printer"></i>
            </div>
            @if(DB::table('forms')->where('id_user', Auth::user()->id)->doesntExist())
            <a href="#" class="small-box-footer" onclick="alert('Kamu belum isi formulir')";>Cetak Pendaftaran<i class="fas fa-arrow-circle-right" ></i></a>
            @else
            <a href="{{ url('cetak') }}" class="small-box-footer">Cetak Pendaftaran<i class="fas fa-arrow-circle-right"></i></a>
            @endif
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h5>Cara Daftar</h5>

              <p>Cara dan tahapan pendaftaran melalui online</p>
            </div>
            <div class="icon">
              <i class="ion ion-information"></i>
            </div>
            <a href="#" class="small-box-footer">Cara Daftar<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h5>Pengumuman</h5>
              <p>Pengumuman dan informasi mengenai Pendaftaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-speakerphone"></i>
            </div>
            <a href="{{ url('pengumumanSiswa') }}" class="small-box-footer">Pengumuman<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
