@extends ('layout.layout')
@section('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li class="selected"><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section('content')
    <h1><b>Mahasiswa</b></h1>
    <p>Mahasiswa Program Studi Teknik Informatika Universitas Matana berasal dari berbagai latar belakang dan memiliki semangat tinggi dalam mengembangkan diri di bidang teknologi. Mereka tidak hanya belajar teori di kelas, tetapi juga aktif dalam kegiatan praktikum, penelitian, dan proyek inovatif berbasis teknologi informasi.</p>

    <h2><b>Kehidupan Mahasiswa</b></h2>
    <p>Selama menempuh pendidikan, mahasiswa Informatika terlibat dalam berbagai kegiatan akademik dan non-akademik seperti:</p>
    <ul>
        <li>Komunitas dan organisasi mahasiswa di bidang teknologi</li>
        <li>Pelatihan dan sertifikasi IT</li>
        <li>Lomba inovasi dan kompetisi pemrograman</li>
        <li>Kegiatan sosial dan pengabdian masyarakat berbasis teknologi</li>
    </ul>

    <h2><b>Dukungan dan Fasilitas</b></h2>
    <p>Universitas Matana menyediakan berbagai fasilitas pendukung bagi mahasiswa, antara lain:</p>
    <ul>
        <li>Laboratorium komputer dengan perangkat modern</li>
        <li>Akses ke sumber daya digital dan jurnal penelitian</li>
        <li>Pembimbing akademik dan dosen berpengalaman</li>
        <li>Program magang industri dan inkubasi startup</li>
    </ul>

    <h2><b>Prestasi Mahasiswa</b></h2>
    <p>Mahasiswa Informatika Universitas Matana secara aktif berpartisipasi dalam berbagai kompetisi teknologi dan telah menorehkan prestasi di tingkat nasional maupun internasional, menunjukkan kualitas dan potensi mereka di dunia profesional.</p>
@endsection