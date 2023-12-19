<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index',['karyawan' => Karyawan::all()]);
    }
    
    public function edit()
    {
        return view('karyawan.edit');
    }
    
    public function create()
    {
        $user = User::all();
        $jabatan = DB::table('jabatan')->get();
        return view('karyawan.create', compact('user','jabatan'));
    }

    public function store(Request $request)
    {
        Karyawan::create(
            [
                'nik'           => $request->nik,
                'user_id'       => $request->user_id,
                'tgl_lahir'     => $request->tgl_lahir,
                'nama'          => $request->nama,
                'jabatan_id'    => $request->jabatan_id,
                'kelamin'       => $request->kelamin,
                'provinsi'      => $request->provinsi,
                'kota'          => $request->kota,
                'alamat'        => $request->alamat,
            ]
            );
        return redirect('/karyawan')->with('pesan', 'Berhasil tambah karyawan');
    }

    public function destroy($id)
    {
        Karyawan::destroy($id);
        return redirect('/karyawan')->with('pesan', 'Berhasil hapus data karyawan');
    }


}
