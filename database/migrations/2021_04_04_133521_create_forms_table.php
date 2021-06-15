<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_user')->constrained('users');
            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nisn')->nullable();
            $table->string('no_ujian')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama_sekolah_asal')->nullable();
            $table->string('ttl')->nullable();
            $table->string('agama')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('jumlah_saudara_kandung')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->text('alamat')->nullable();
            $table->string('alat_transport')->nullable();
            $table->string('tinggal')->nullable();
            $table->string('jarak')->nullable();
            $table->string('waktu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('tahun_lahir_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('tahun_lahir_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('penghasilan_wali'->nullable());
            $table->string('tahun_lahir_wali')->nullable();
            $table->string('jenis_prestasi')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('nama_prestasi')->nullable();
            $table->string('tahun')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
