<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index');
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


}
