<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = User::all();
        return view('karyawan.create', compact('user'));
    }


}
