<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function tampil()
    {
        return view('karyawan.index');
    }
    
    public function edit()
    {
        return view('karyawan.edit');
    }
    
    public function create()
    {
        return view('karyawan.create');
    }


}
