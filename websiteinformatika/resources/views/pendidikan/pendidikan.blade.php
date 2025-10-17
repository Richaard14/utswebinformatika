@extends ('layout.layout')
@section('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li  class="selected"><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section('content')
    <h1><b>Pendidikan</b></h1>
    <p>Program Studi Teknik Informatika di Universitas Matana berfokus pada penguasaan konsep, metode, dan teknologi yang digunakan dalam pengembangan sistem komputer dan perangkat lunak. Mahasiswa dibekali kemampuan analisis, logika, serta pemecahan masalah berbasis teknologi informasi.</p>

    <h2><b>Tujuan Pendidikan</b></h2>
    <ul>
        <li>Menghasilkan lulusan yang kompeten dalam bidang pengembangan perangkat lunak dan teknologi informasi.</li>
        <li>Mengembangkan kemampuan berpikir kritis dan inovatif dalam menghadapi tantangan era digital.</li>
        <li>Menumbuhkan etika profesional dan tanggung jawab sosial dalam penerapan teknologi.</li>
    </ul>

    <h2><b>Kurikulum</b></h2>
    <p>Kurikulum dirancang sesuai dengan kebutuhan industri dan perkembangan teknologi terkini. Mahasiswa akan mempelajari berbagai bidang seperti:</p>
    <ul>
        <li>Pemrograman dan Rekayasa Perangkat Lunak</li>
        <li>Jaringan Komputer dan Keamanan Siber</li>
        <li>Kecerdasan Buatan dan Pembelajaran Mesin</li>
        <li>Data Science dan Analitik</li>
        <li>Sistem Basis Data</li>
    </ul>

    <h2><b>Prospek Karier</b></h2>
    <p>Lulusan Teknik Informatika Universitas Matana memiliki peluang karier yang luas, di antaranya sebagai:</p>
    <ul>
        <li>Software Engineer</li>
        <li>Data Analyst / Data Scientist</li>
        <li>Cybersecurity Specialist</li>
        <li>IT Consultant</li>
        <li>AI Engineer</li>
        <li>Entrepreneur di bidang teknologi</li>
    </ul>
@endsection