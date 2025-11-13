<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //index view
    public function index()
    {
        // ambil db table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->paginate(5);

        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
    //add //tambah
}