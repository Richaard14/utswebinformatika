@extends ('layout.layout')

@section ('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li  class="selected"><a href="{{ url('/riset') }}">Riset</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section('content')
    <h1><b>Riset</b></h1>
    <p>Riset di Program Studi Teknik Informatika Universitas Matana berfokus pada pengembangan inovasi teknologi yang dapat memberikan dampak nyata bagi masyarakat dan industri. Melalui kegiatan penelitian, mahasiswa dan dosen berkolaborasi untuk menciptakan solusi kreatif dalam bidang teknologi informasi.</p>

    <h2><b>Bidang Riset Unggulan</b></h2>
    <ul>
        <li>Kecerdasan Buatan (Artificial Intelligence) dan Pembelajaran Mesin (Machine Learning)</li>
        <li>Keamanan Siber (Cybersecurity)</li>
        <li>Internet of Things (IoT) dan Sistem Tertanam</li>
        <li>Analisis Data dan Big Data</li>
        <li>Pengembangan Perangkat Lunak dan Sistem Informasi</li>
    </ul>

    <h2><b>Kegiatan Penelitian</b></h2>
    <p>Mahasiswa didorong untuk terlibat dalam proyek penelitian bersama dosen maupun industri mitra. Beberapa kegiatan riset meliputi:</p>
    <ul>
        <li>Proyek akhir berbasis penelitian terapan</li>
        <li>Publikasi ilmiah di jurnal nasional dan internasional</li>
        <li>Partisipasi dalam seminar dan konferensi teknologi</li>
        <li>Kolaborasi dengan startup dan lembaga penelitian</li>
    </ul>

    <h2><b>Tujuan Riset</b></h2>
    <p>Tujuan utama kegiatan riset adalah untuk memperkuat kemampuan analisis dan inovasi mahasiswa, serta mendukung kemajuan teknologi yang relevan dengan kebutuhan masyarakat dan industri digital masa kini.</p>
@endsection