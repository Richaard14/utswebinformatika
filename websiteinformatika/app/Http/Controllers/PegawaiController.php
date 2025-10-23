<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //index view
    public function index()
    {
        // ambil db table pegawai
        $pegawai = DB::table('pegawai')->get();

        return view('admin.pegawai.index', ['pegawai' => $pegawai]);
    }
    //add //tambah
    public function tambah()
    {
        //memanggil view tambah
        return view('admin.pegawai.tambah');
    }

    //simpan
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->Nama,
            'pegawai_jabatan' => $request->Jabatan,
            'pegawai_umur' => $request->Umur,
            'pegawai_alamat' => $request->Alamat

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //update

    //hapus

    //pdf
}
