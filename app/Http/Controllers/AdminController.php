<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use App\User;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Exports\DataAkun;
use App\Exports\DataSiswa;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cSiswa = DB::table('users')->where('id', '=',2)->first();
        $cSiswa = Form::all();
        return view('admin.calonsiswa', compact('cSiswa'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view ('admin.pengumuman', compact('pengumuman'));
    }
    public function buatPengumuman()
    {
        return view ('admin.buatPengumuman');
    }
    public function addPengumuman(Request $request)
    {
        Pengumuman::create($request->all());
        return redirect('/pengumuman')->with('status', 'Pengumuman berhasil dibuat!');
    }
    public function editPengumuman($id)
    {
        $pengumuman = DB::table('pengumuman')->where('id', $id)->first();
        return view ('admin.editPengumuman', compact('pengumuman'));
    }
    public function editPengumumanFunction(Request $request, $id)
    {
        Pengumuman::where('id', $id)
                    ->update([
                        'judul' => $request->judul,
                        'isi' => $request->isi
                    ]);
        return redirect('/pengumuman')->with('status', 'Pengumuman berhasil diedit!');
    }
    public function hapusPengumuman($id)
    {
        Pengumuman::where('id', $id)->delete();
        return redirect('/pengumuman')->with('status', 'Pengumuman berhasil dihapus!');
    }
    public function pemberitahuan()
    {
        $pengumuman = Pengumuman::all();
        return view ('pemberitahuan', compact('pengumuman'));
    }
    public function dashAdmin()
    {
        $cSiswa = Form::all();
        $disUser = User::all();
        $disPengumuman = Pengumuman::all();
        $cSiswaCount = $cSiswa->count();
        $disUserCount = $disUser->count();
        $disPengumumanCount = $disPengumuman->count();
        return view ('admin.dashboardAdmin', compact('cSiswa', 'cSiswaCount','disUserCount', 'disPengumumanCount'));
    }

    public function cetakSiswa($id)
    {
         $cetak_siswa = DB::table('forms')->where('id', $id)->first();
         // $pdf = PDF::loadview('admin.cetak', $cetak_siswa, compact('cetak_siswa'))->setPaper('A4', 'potrait');
         $pdf = PDF::loadview('admin.cetak',['forms'=>$cetak_siswa], compact('cetak_siswa'));
        ini_set('max_execution_time', 300);
        return $pdf->stream();
         // return view ('admin.cetak', compact('cetak_siswa'));
    }
    public function cetak_data_akun()
    {
        $cetakDataAkun = User::all();
        $pdf = PDF::loadview('admin.cetakDataAkun',['users'=>$cetakDataAkun], compact('cetakDataAkun'));
        ini_set('max_execution_time', 300);
        return $pdf->stream();
        // return view ('admin.cetakDataAkun', compact('cetakDataAkun'));
    }
    public function cetak_data_siswa()
    {
        $cetakDataSiswa = Form::all();
        return view ('admin.cetakCalonSiswa', compact('cetakDataSiswa'));
    }

    public function dataAkun_export()
    {
        return Excel::download(new DataAkun, 'dataakun.xlsx');
    }
    public function dataSiswa_export()
    {
        return Excel::download(new DataSiswa, 'datasiswa.xlsx');
    }
    public function cara_daftar()
    {
        return view('caraDaftar');
    }
    public function cara_daftar_hp()
    {
        return view('caraDaftarHP');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
