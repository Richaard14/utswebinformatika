<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //index
    public function index()
    {
        $files = File::all();
        return view('admin.file.index', compact('files'));
    }

    //storage
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'file' => 'required|file|max:2048', //maksimal 2MB
        ]);

        //simpan file ke storage/app/public/uploads
        $path = $request->file('file')->store('uploads', 'public');

        //simpan ke database
        $file = new File();
        $file->name = $request->file('file')->getClientOriginalName();
        $file->path =$path;
        $file->save();

        return back()->with('success', 'File berhasil diunggah.');
    }

    //hapus file
    public function destroy($id)
    {
        //dapatkan file dari db berdasarkan id
        //dan ambil pathnya 
        $file = File::findOrFail($id);
        //hapus file dari storage
        if (Storage::disk('public')->exists($file->path)) {
            Storage::disk('public')->delete($file->path);
        }
        //hapus data dari db
        $file->delete();
        //kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'File berhasil dihapus.');
    }

}