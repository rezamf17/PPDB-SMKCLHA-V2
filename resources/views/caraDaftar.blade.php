@extends('layouts.app')
@section('title')
Cara Daftar
@endsection
@section('content')
<h1 class="judulCara">Cara Daftar Lewat Laptop/PC</h1>
<p>1. Klik 'DAFTAR SEKARANG'</p>
<img src="{{asset('gambar/screenShot/homeArrow.png')}}" class="gambar1">
<p>2. Silahkan isi form yang telah disediakan. Lalu, klik 'DAFTAR'</p>
<img src="{{asset('gambar/screenShot/daftarsekarangArrow.png')}}" class="gambar1">
<p>3. Setelah berhasil akan muncul tampilan menu utama. Pilih Menu 'Formulir' untuk mengisi Formulir</p>
<img src="{{asset('gambar/screenShot/menu.png')}}" class="gambar1">
<p>4. Setelah klik menu Formulir, isikan dengan lengkap Formulir data diri Anda.</p>
<img src="{{asset('gambar/screenShot/formulirArrow.png')}}" class="gambar1">
<p>5. Setelah mengisi Formulir dengan lengkap. Klik Simpan.</p>
<img src="{{asset('gambar/screenShot/simpanformulir.png')}}" class="gambarSimpan">
<p>6. Setelah itu akan kembali ke menu utama. Klik Menu 'Upload File'</p>
<img src="{{asset('gambar/screenShot/menu.png')}}" class="gambar1">
<p>7. Upload file yang diminta, lalu klik tombol 'Upload'</p>
<img src="{{asset('gambar/screenShot/uploadfile.png')}}" class="gambar1">
<p>8. Setelah file terupload tunggu sampai status terganti menjadi 'Diterima'</p>
@endsection