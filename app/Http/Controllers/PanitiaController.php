<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\File;
use App\User;

class PanitiaController extends Controller
{
    public function index()
    {
        $files = File::all();
        $user = User::all();
        return view ('panitia.panitiaDashboard', compact('files', 'user'));
    }
     public function lihat($id)
    {
        $data = File::find($id);
        $user = User::all();
        return view('calonsiswa.lihat', compact('data', 'user'));
    }

    public function downloadIjazah($ijazah)
    {
        return response()->download('uploads/'. $ijazah);
    }

    public function diterima($id)
    {
        DB::table('users')->where('id', $id)
        ->update([
            'status' => 'Diterima'
        ]);

        return redirect('/panitia')->with('status', 'Status Berhasil Diterima!');
    }

    public function ditolak($id)
    {
        DB::table('users')->where('id', $id)
        ->update([
            'status' => 'Ditolak'
        ]);

        return redirect('/panitia')->with('status', 'Status Berhasil Ditolak!');
    }
}
