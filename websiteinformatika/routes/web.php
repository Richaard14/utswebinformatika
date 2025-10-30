<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PegawaiController;

Route::get('/beranda', function () {
    return view('beranda.beranda');
});

Route::get('/', function () {
    return view('beranda.beranda');
});

Route::get('/profil', function () {
    return view('profil.profil');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.pendidikan');
});

Route::get('/riset', function () {
    return view('riset.riset');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.mhs');
});

Route::get('/lain_lainya', function () {
    return view('lain_lainya.lain');
});

Route::get('/admin', function () {
    return view('admin.beranda.index');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Route::get('/search', [SearchController::class, 'search'])->name('search');