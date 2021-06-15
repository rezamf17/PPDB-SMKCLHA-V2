@extends('layouts.temp')
@section('title')
Ganti Data Formulir
@endsection
@section('breadcrumb')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ganti Formulir Pendaftaran Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Ganti Formulir</li>
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
	@foreach ($editForm as $element)
	<form action="{{ url('/gantiFormulir') }}" method="post" onsubmit="return confirm('Yakin ganti data formulir?')">
		@method('patch')
		@csrf
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><i class="fas fa-user mr-1"></i>Data Diri Siswa</h3>
			<div class="float-right">
				<a href="{{ url('home') }}" class="btn btn-default"><i class="fa fa-undo"></i>Kembali</a>
			</div>
		</div>
		<!-- /.card-header -->
			<div class="card-body">
				<div style="display:none;">
					<input type="number" value="{{ Auth::user()->id }}" name="id_user">
				</div>
				<div class="card-body card-block">
					<div class="form-group">
						<label for="company" class=" form-control-label">Nama Lengkap</label>
						<input type="text" id="company" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" value="{{$element->nama_lengkap}}">
					</div>
					@csrf
					<div class="form-group">
						<div class="form-control-label"><label class=" form-control-label">Jenis Kelamin</label></div>
						<div class="col col-md-9">
							<div class="form-check-inline">
								<div class="radio">
									<label for="radio1" class="form-check-label ">
										<input type="radio" id="radio1" name="jenis_kelamin" value="Laki-laki" class="form-check-input" {{$element->jenis_kelamin == 'Laki-laki'? 'checked' : ''}}>Laki-laki &emsp;
									</label>
								</div>
								<div class="radio">
									<label for="radio2" class="form-check-label ">
										<input type="radio" id="radio2" name="jenis_kelamin" value="Perempuan" class="form-check-input" {{$element->jenis_kelamin == 'Perempuan'? 'checked' : ''}}>Perempuan
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">NISN</label>
							<input type="tel" id="street" placeholder="NISN" name="nisn" class="form-control" value="{{$element->nisn}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">No. Ujian Nasional</label>
							<input type="text" id="street" placeholder="No. Ujian Nasional" name="no_ujian" class="form-control" value="{{$element->no_ujian}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">No. Induk Kependudukan (NIK)</label>
							<input type="text" id="street" placeholder="No. Induk Kependudukan (NIK)" name="nik" class="form-control" value="{{$element->nik}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Nama Sekolah Asal</label>
							<input type="text" id="street" placeholder="Nama Sekolah Asal" name="nama_sekolah_asal" class="form-control" value="{{$element->nama_sekolah_asal}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tempat, Tanggal Lahir</label>
							<input type="text" id="street" name="ttl" placeholder="Tempat, Tanggal Lahir" class="form-control" value="{{$element->ttl}}">
							*Contoh : Bandung, 18 Juli 2003
						</div>
						<div class="form-group">
							<div class="form-control-label"><label for="select" class=" form-control-label">Agama</label></div>
							<div class="form-group">
								<select name="agama" id="select" class="form-control">
									<option value="">--Pilih Agama--</option>
									<option value="Islam" {{$element->agama == 'Islam'? 'selected' : ''}}>Islam</option>
									<option value="Kristen Protestan" {{$element->agama == 'Kristen Protestan'? 'selected' : ''}}>Kristen Protestan</option>
									<option value="Kristen Katolik" {{$element->agama == 'Kristen Katolik'? 'selected' : ''}}>Kristen Katolik</option>
									<option value="Hindu" {{$element->agama == 'Hindu'? 'selected' : ''}}>Hindu</option>
									<option value="Budha" {{$element->agama == 'Budha'? 'selected' : ''}}>Budha</option>
									<option value="Lainnya" {{$element->agama == 'Lainnya'? 'selected' : ''}}>Lainnya..</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tinggi Badan</label>
							<input type="text" id="street" placeholder="Tinggi Badan" name="tinggi_badan" class="form-control" value="{{$element->tinggi_badan}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Berat Badan</label>
							<input type="text" id="street" placeholder="Berat Badan" name="berat_badan" class="form-control" value="{{$element->berat_badan}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Jumlah Saudara Kandung</label>
							<input type="text" id="street" placeholder="Jumlah Saudara Kandung" name="jumlah_saudara_kandung" class="form-control" value="{{$element->jumlah_saudara_kandung}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Telp. Rumah</label>
							<input type="text" id="street" placeholder="Telp. Rumah" name="no_telp" class="form-control" value="{{$element->no_telp}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">No. HP</label>
							<input type="text" id="street" placeholder="No. HP" name="no_hp" class="form-control" value="{{$element->no_hp}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Email</label>
							<input type="text" id="street" placeholder="Email" name="email" class="form-control" value="{{$element->email}}">
						</div>
					</div>
					@endforeach
				</div>
				<!-- /.card-body -->			
		</div>
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><i class="fas fa-map-marker mr-1"></i>Data Alamat Siswa</h3>	
			</div>
				<div class="card-body">
					<div class="form-group">
							<label for="street" class=" form-control-label">Alamat</label>
							<textarea name="alamat" class="form-control">{{$element->alamat}}</textarea>
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Alat Transportasi Ke Sekolah</label>
							<input type="text" id="street" placeholder="Alat Transportasi Ke Sekolah" name="alat_transport" class="form-control" value="{{$element->alat_transport}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tinggal Dengan Siapa</label>
							<input type="text" id="street" placeholder="Tinggal Dengan Siapa" name="tinggal" class="form-control" value="{{$element->tinggal}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Jarak Tempat Tinggal Ke Sekolah</label>
							<input type="text" id="street" placeholder="Jarak Tempat Tinggal Ke Sekolah" name="jarak" class="form-control" value="{{$element->jarak}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Waktu Tempuh Berangkat Ke Sekolah</label>
							<input type="text" id="street" placeholder="Waktu Tempuh Berangkat Ke Sekolah" name="waktu" class="form-control" value="{{$element->waktu}}">
						</div>
				</div>
		</div>
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><i class="fas fa-users mr-1"></i>Data Orang Tua Siswa</h3>	
			</div>
				<div class="card-body">
					<div class="form-group">
							<label for="street" class=" form-control-label">Nama Ayah</label>
							<input type="text" id="street" placeholder="Nama Ayah" name="nama_ayah" class="form-control" value="{{$element->nama_ayah}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Pekerjaan Ayah</label>
							<input type="text" id="street" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah" class="form-control" value="{{$element->pekerjaan_ayah}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Pendidikan Ayah</label>
							<input type="text" id="street" placeholder="Pendidikan Ayah" name="pendidikan_ayah" class="form-control" value="{{$element->pendidikan_ayah}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Penghasilan Ayah</label>
							<input type="text" id="street" placeholder="Penghasilan Ayah" name="penghasilan_ayah" class="form-control" value="{{$element->penghasilan_ayah}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tahun Lahir Ayah</label>
							<input type="text" id="street" placeholder="Tahun Lahir Ayah" name="tahun_lahir_ayah" class="form-control" value="{{$element->tahun_lahir_ayah}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Nama Ibu</label>
							<input type="text" id="street" placeholder="Nama Ibu" name="nama_ibu" class="form-control" value="{{$element->nama_ibu}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Pekerjaan Ibu</label>
							<input type="text" id="street" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu" class="form-control" value="{{$element->pekerjaan_ibu}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Pendidikan Ibu</label>
							<input type="text" id="street" placeholder="Pendidikan Ibu" name="pendidikan_ibu" class="form-control" value="{{$element->pendidikan_ibu}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Penghasilan Ibu</label>
							<input type="text" id="street" placeholder="Penghasilan Ibu" name="penghasilan_ibu" class="form-control"value="{{$element->penghasilan_ibu}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tahun Lahir Ibu</label>
							<input type="text" id="street" placeholder="Tahun Lahir Ibu" name="tahun_lahir_ibu" class="form-control" value="{{$element->tahun_lahir_ibu}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Nama Wali</label>
							<input type="text" id="street" placeholder="Nama Wali" name="nama_wali" class="form-control" value="{{$element->nama_wali}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Pekerjaan Wali</label>
							<input type="text" id="street" placeholder="Pekerjaan Wali" name="pekerjaan_wali" class="form-control" value="{{$element->pekerjaan_wali}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Pendidikan Wali</label>
							<input type="text" id="street" placeholder="Pendidikan Wali" name="pendidikan_wali" class="form-control" value="{{$element->pendidikan_wali}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Penghasilan Wali</label>
							<input type="text" id="street" placeholder="Penghasilan Wali" name="penghasilan_wali" class="form-control" value="{{$element->penghasilan_wali}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tahun Lahir Wali</label>
							<input type="text" id="street" placeholder="Tahun Lahir Wali" name="tahun_lahir_wali" class="form-control" value="{{$element->tahun_lahir_wali}}">
						</div>
				</div>
		</div>
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><i class="fas fa-trophy mr-1"></i>Data Prestasi Siswa (Jika Ada)</h3>	
			</div>
				<div class="card-body">
					<div class="form-group">
							<label for="street" class=" form-control-label">Jenis Prestasi</label>
							<input type="text" id="street" placeholder="Jenis Prestasi" name="jenis_prestasi" class="form-control" value="{{$element->jenis_prestasi}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tingkat</label>
							<input type="text" id="street" placeholder="Tingkat" name="tingkat" class="form-control" value="{{$element->tingkat}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Nama Prestasi</label>
							<input type="text" id="street" placeholder="Nama Prestasi" name="nama_prestasi" class="form-control" value="{{$element->nama_prestasi}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Tahun</label>
							<input type="text" id="street" placeholder="Tahun" name="tahun" class="form-control" value="{{$element->tahun}}">
						</div>
						<div class="form-group">
							<label for="street" class=" form-control-label">Penyelenggara</label>
							<input type="text" id="street" placeholder="Penyelenggara" name="penyelenggara" class="form-control" value="{{$element->penyelenggara}}">
						</div>
				</div>
				<div class="card-footer">
						<button class="btn btn-primary"><i class="fas fa-save"></i>Ganti Data</button>
						<a href="{{ url('home') }}" title="" class="btn btn-default">Batal</a>
					</div>
		</div>
		</form>
		@endsection