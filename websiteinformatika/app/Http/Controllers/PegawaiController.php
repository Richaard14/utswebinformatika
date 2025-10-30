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
        $pegawai = DB::table('pegawai')->paginate(5);

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

    // form edit
    public function edit($id)
    {
        // mengambil data dari sql tabel pegawai
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
        //view --> form
        return view('admin.pegawai.edit', ['pegawai' => $pegawai]);
    }

    // update table pegawai
    public function update(Request $request, $id)
    {
        // validasi data
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Jabatan' => 'required|string|max:255',
            'Umur' => 'required|integer|min:8',
            'Alamat' => 'required|string|max:255',
        ]);
        
        // update data table pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->Nama,
            'pegawai_jabatan' => $request->Jabatan,
            'pegawai_umur' => $request->Umur,
            'pegawai_alamat' => $request->Alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai')-> with ('success', 'Data Pegawai Berhasil Diupdate!');
    }

    //hapus
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai')-> with ('success', 'Data Pegawai Berhasil Dihapus!');
    }

    //pdf
}
