<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Tambahkan logika pencarian sesuai kebutuhan
        // Contoh sederhana: mencari dalam konten statis
        $results = [];
        
        if ($query) {
            // Contoh pencarian sederhana
            $pages = [
                ['title' => 'Beranda', 'url' => '/beranda', 'content' => 'Halaman beranda website informatika'],
                ['title' => 'Profil', 'url' => '/profil', 'content' => 'Profil jurusan informatika'],
                ['title' => 'Pendidikan', 'url' => '/pendidikan', 'content' => 'Informasi pendidikan informatika'],
                ['title' => 'Riset', 'url' => '/riset', 'content' => 'Riset dan penelitian informatika'],
                ['title' => 'Mahasiswa', 'url' => '/mahasiswa', 'content' => 'Informasi mahasiswa informatika'],
                ['title' => 'Lain-lainnya', 'url' => '/lain_lainya', 'content' => 'Informasi lainnya']
            ];
            
            foreach ($pages as $page) {
                if (stripos($page['title'], $query) !== false || 
                    stripos($page['content'], $query) !== false) {
                    $results[] = $page;
                }
            }
        }
        
        return view('search.results', [
            'query' => $query,
            'results' => $results
        ]);
    }
}