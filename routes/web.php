<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){
    Route::get('/profil', function(){
        return view('halaman.profil');
    });

    Route::post('/upload', function(){
        $path = request('foto')->store('Avatars'); //simpan file foto ke folder Avatars
        DB::table('users')->where('id', Auth::user()->id)
        ->update([
            'avatar' => $path
        ]); //perintah simpan nama foto ke database
        return redirect('/profil')->with('pesan', 'Berhasil upload foto');
    });

    Route::controller(KaryawanController::class)->group(function(){
        Route::get('/karyawan', 'index')->name('tampil karyawan');
        Route::get('/karyawan/create', 'create')->name('tambah karyawan');
        Route::get('/karyawan/{karyawan}/edit', 'edit')->name('edit karyawan');
        Route::post('/karyawan', 'store');
        Route::delete('/karyawan/{id}', 'destroy');
    });
});