<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
use App\Form;
use App\Pengumuman;
use App\File;

class CalonSiswaController extends Controller
{
     public function index()
    {
        // return view('calonsiswa.formulir');
    }

    public function viewCalonSiswa($id)
    {
        $vCalonSiswa = DB::table('forms')->where('id', $id)->first();
    	return view('admin.viewCalonSiswa', compact('vCalonSiswa'));
    }

    public function Cetakformulir()
    {
    	$cetakform = DB::table('forms')->where('id_user', Auth::user()->id)
    	->get();
    	$pdf = PDF::loadview('calonsiswa.cetak', $cetakform, compact('cetakform'))->setPaper('A4', 'potrait');
        ini_set('max_execution_time', 300);
        return $pdf->stream();
        // return $pdf->download('FORMULIRPENDAFTARAN.pdf');
        // return view ('calonsiswa.cetak', compact('cetakform'));
    }

    public function formulirAdd(Request $request)
    {
    	DB::table('data_siswa')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'no_ujian' => $request->no_ujian,
            'nik' => $request->nik,
            'nama_sekolah_asal' => $request->nama_sekolah_asal,
            'ttl' => $request->ttl,
            'agama' => $request->agama,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'jumlah_saudara_kandung' => $request->jumlah_saudara_kandung,
            'no_telp' => $request->no_telp,
            'no_hp' => $request->no_hp,
            'email' => $request->email
        ]);
         return redirect('/datasiswa')->with('status', 'Formulir data diri siswa berhasil disimpan!');
    }

    public function editFormulir()
    {
        $editForm = DB::table('forms')->where('id_user', Auth::user()->id)
        ->get();
        // $editForm = Form::all();
        return view ('calonsiswa.editFormulir', compact('editForm'));
        // return $request;
    }
    public function editFormProcess(Request $request)
    {
        DB::table('forms')->where('id_user', Auth::user()->id)
        ->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'no_ujian' => $request->no_ujian,
            'nik' => $request->nik,
            'nama_sekolah_asal' => $request->nama_sekolah_asal,
            'ttl' => $request->ttl,
            'agama' => $request->agama,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'jumlah_saudara_kandung' => $request->jumlah_saudara_kandung,
            'no_telp' => $request->no_telp,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'alat_transport' => $request->alat_transport,
            'tinggal' => $request->tinggal,
            'jarak' => $request->jarak,
            'waktu' => $request->waktu,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'tahun_lahir_ayah' => $request->tahun_lahir_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'tahun_lahir_ibu' => $request->tahun_lahir_ibu,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'pendidikan_wali' => $request->pendidikan_wali,
            'penghasilan_wali' => $request->penghasilan_wali,
            'tahun_lahir_wali' => $request->tahun_lahir_wali,
            'jenis_prestasi' => $request->jenis_prestasi,
            'tingkat' => $request->tingkat,
            'nama_prestasi' => $request->nama_prestasi,
            'tahun' => $request->tahun,
            'penyelenggara' => $request->penyelenggara
        ]);
         return redirect('/gantiFormulir')->with('status', 'Data formulir berhasil diganti!');
    }

    public function pengumumanSiswa()
    {
        $pengumuman = Pengumuman::all();
        return view ('calonsiswa.pengumuman', compact('pengumuman'));
    }

    public function upload()
    {
        $files = File::all();
        return view ('calonsiswa.uploadFile', compact('files'));
    }

    public function uploadFile(Request $request)
    {

        $request->validate([
         'ijazah' => 'required|image|max:2048',
         'kk' => 'required|image|max:2048',
         'akte' => 'required|image|max:2048',
         'skkb' => 'required|image|max:2048',
         'bukti_tf' => 'required|image|max:2048',
 
        ]);

        // $ijazah = $request->ijazah;
        // $kk = $request->kk;
        // $akte = $request->akte;
        // $skkb = $request->skkb;
        // $bukti_tf = $request->bukti_tf;
        // $ijazah = $request->file('ijazah');
        // $kk = $request->file('kk');
        // $akte = $request->file('akte');
        // $skkb = $request->file('skkb');
        // $bukti_tf = $request->file('bukti_tf');
        // $namaIjazah = time().".".$ijazah->getClientOriginalName();
        // $namaKk = time().".".$kk->getClientOriginalName();
        // $namaAkte = time().".".$akte->getClientOriginalName();
        // $namaSkkb = time().".".$skkb->getClientOriginalName();
        // $namaBukti_tf = time().".".$bukti_tf->getClientOriginalName();
        $fileUpload = new File;
        $files = File::all();
        $fileName = Auth::user()->name;
        if ($request->file('ijazah')) {
            $ijazah = $request->file('ijazah');
            $namaIjazah = $fileName.'IJAZAH'.$ijazah->getClientOriginalName();
            $ijazah->move(public_path().'/uploads', $namaIjazah);
            $fileUpload->ijazah = $namaIjazah;
        }
        if ($request->file('kk')) {
            $kk = $request->file('kk');
            $namaKk = time().".".$kk->getClientOriginalName();
            $kk->move(public_path().'/uploads', $namaKk);
            $fileUpload->kk = $namaKk;
        }
        if ($request->file('akte')) {
            $akte = $request->file('akte');
            $namaAkte = time().".".$akte->getClientOriginalName();
            $akte->move(public_path().'/uploads', $namaAkte);
            $fileUpload->akte = $namaAkte;
        }
        if ($request->file('skkb')) {
            $skkb = $request->file('skkb');
            $namaSkkb = time().".".$kk->getClientOriginalName();
            $skkb->move(public_path().'/uploads', $namaSkkb);
            $fileUpload->skkb = $namaSkkb;
        }
        if ($request->file('bukti_tf')) {
            $bukti_tf = $request->file('bukti_tf');
            $namaBukti_tf = time().".".$bukti_tf->getClientOriginalName();
            $bukti_tf->move(public_path().'/uploads', $namaBukti_tf);
            $fileUpload->bukti_tf = $namaBukti_tf;
        }
        $fileUpload->id_user = $request->id_user;
        // $fileUpload->ijazah = $namaIjazah;
        // $fileUpload->kk = $namaKk;
        // $fileUpload->akte = $namaAkte;
        // $fileUpload->skkb = $namaSkkb;
        // $fileUpload->bukti_tf = $namaBukti_tf;

        // $ijazah->move(public_path().'/uploads', $namaIjazah);
        // $kk->move(public_path().'/uploads', $namaKk);
        // $akte->move(public_path().'/uploads', $namaAkte);
        // $skkb->move(public_path().'/uploads', $namaSkkb);
        // $bukti_tf->move(public_path().'/uploads', $namaBukti_tf);
        $fileUpload->save();

        return redirect('/uploadFile')->with('status', 'Upload file berhasil!');
        // return $request;
    }

    public function reset(File $files)
    {
        // File::where('id', $files->id)->delete();
        // $files->delete();
        File::destroy($files->id);
        return redirect('/uploadFile')->with('status', 'Upload file berhasil di reset!');
    }

    public function hapus($id_user)
    {
        File::where('id_user', $id_user)->delete();
        return redirect('/uploadFile')->with('status', 'Upload file berhasil di hapus!');
        // return $id_user;
    }

    public function lihat($id)
    {
        $data = File::find($id);
        return view('calonsiswa.lihat', compact('data'));
    }

    public function downloadIjazah($ijazah)
    {
        return response()->download('uploads/'. $ijazah);
    }
}
