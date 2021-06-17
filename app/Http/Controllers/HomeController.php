<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\form;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $formulirTab = Form::all();
        // $formulir = DB::table('forms')->where('id', $id)->first();
        $formulir = DB::table('forms')->where('id_user', '=',  Auth::user()->id)->count();
        $id = Auth::user()->id;
        return view('home', compact('formulir', 'id', 'formulirTab','ss','dd'));
        // return $formulir;
        // var_dump($formulir);
    }
    public function admin()
    {
        $users = DB::table('users')->get();
        return view ('admin', compact('users'));
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'role' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function adminAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($request->password != $request->password_confirmation) {
            return redirect('/admin')->with('error', 'Password Konfirmasi Harus Benar');
        }

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin')->with('status', 'Data akun berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $users = DB::table('users')->where('id', $id)->first();
        // $role = DB::table('role')->where('id_role', $id)->first();
        // return $user;
        return view ('admin.editAdmin', compact('users', 'role'));
    }
    public function editProcess(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'email',
            'password' => 'confirmed',
        ]);

        if ($request->password != $request->password_confirmation) {
            return redirect('/admin')->with('error', 'Password Konfirmasi Harus Benar');
        }
        
        // DB::table('users')->where('id', $id)
        // ->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role' => $request->role,
        //     'password' => Hash::make($request->password)
        // ]);

        if ($request->password != null) {
            DB::table('users')->where('id', $id)
            ->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);
        }else{
            DB::table('users')->where('id', $id)
            ->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        }

        return redirect('/admin')->with('status', 'Data akun berhasil diedit!');
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin')->with('status', 'Data akun berhasil dihapus!');
    }
}
