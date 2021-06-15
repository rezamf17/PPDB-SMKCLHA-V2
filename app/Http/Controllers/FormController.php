<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = DB::table('forms')->get();
        return view ('calonsiswa.formulir', compact('forms'));
    }

    public function print()
    {
        // $forms = Form::all();
        // // $forms = Form::with('data_siswa')->paginate(1);
        // // return $forms;
        // return view ('calonsiswa.cetak', compact('forms')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $forms = new Form;

        // $forms->nama_lengkap = $request->nama_lengkap;
        // $forms->jenis_kelamin = $request->jenis_kelamin;
        // $forms->nisn = $request->nisn;
        // $forms->no_ujian = $request->no_ujian;
        // $forms->nik = $request->nik;
        // $forms->nama_sekolah_asal = $request->nama_sekolah_asal;
        // $forms->ttl = $request->ttl;
        // $forms->agama = $request->agama;
        // $forms->tinggi_badan = $request->tinggi_badan;
        // $forms->berat_badan = $request->berat_badan;
        // $forms->jumlah_saudara_kandung = $request->jumlah_saudara_kandung;
        // $forms->no_telp = $request->no_telp;
        // $forms->no_hp = $request->no_hp;
        // $forms->email = $request->email;
        // $forms->alamat = $request->alamat;
        // $forms->alat_transport = $request->alat_transport;
        // $forms->tinggal = $request->tinggal;
        // $forms->jarak = $request->jarak;
        // $forms->waktu = $request->waktu;
        // $forms->nama_ayah = $request->nama_ayah;
        // $forms->pekerjaan_ayah = $request->pekerjaan_ayah;
        // $forms->pendidikan_ayah = $request->pendidikan_ayah;
        // $forms->penghasilan_ayah = $request->penghasilan_ayah;
        // $forms->tahun_lahir_ayah = $request->tahun_lahir_ayah;
        // $forms->nama_ibu = $request->nama_ibu;
        // $forms->pekerjaan_ibu = $request->pekerjaan_ibu;
        // $forms->pendidikan_ibu = $request->pendidikan_ibu;
        // $forms->penghasilan_ibu = $request->penghasilan_ibu;
        // $forms->tahun_lahir_ibu = $request->tahun_lahir_ibu;
        // $forms->nama_wali = $request->nama_wali;
        // $forms->pekerjaan_wali = $request->pekerjaan_wali;
        // $forms->pendidikan_wali = $request->pendidikan_wali;
        // $forms->penghasilan_wali = $request->penghasilan_wali;
        // $forms->tahun_lahir_wali = $request->tahun_lahir_wali;
        // $forms->jenis_prestasi = $request->jenis_prestasi;
        // $forms->tingkat = $request->tingkat;
        // $forms->nama_prestasi = $request->nama_prestasi;
        // $forms->tahun = $request->tahun;
        // $forms->penyelenggara = $request->penyelenggara;
        // $forms->save();

        Form::create($request->all());

        return redirect('/forms')->with('status', 'Formulir berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
