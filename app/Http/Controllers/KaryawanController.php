<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('karyawan.create');
    }


}
