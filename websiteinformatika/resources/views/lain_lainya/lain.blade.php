@extends ('layout.layout')
@section ('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/beranda') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li class="selected"><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section('content')
    <h1><b>Lain-Lainnya</b></h1>
    <p>Bagian ini memuat berbagai informasi tambahan yang berkaitan dengan kegiatan, prestasi, dan pengembangan di Jurusan Teknik Informatika Universitas Lampung. Konten ini mencerminkan dinamika serta aktivitas yang mendukung proses akademik dan non-akademik mahasiswa.</p>

    <h2><b>Kegiatan Non-Akademik</b></h2>
    <p>Selain kegiatan akademik, mahasiswa juga aktif dalam berbagai kegiatan pengembangan diri seperti:</p>
    <ul>
        <li>Komunitas teknologi dan klub pemrograman</li>
        <li>Pelatihan keterampilan digital</li>
        <li>Kegiatan sosial dan pengabdian masyarakat</li>
        <li>Seminar dan workshop teknologi</li>
    </ul>

    <h2><b>Kerja Sama dan Kolaborasi</b></h2>
    <p>Jurusan Teknik Informatika Universitas Lampung menjalin kerja sama dengan berbagai instansi, baik pemerintah maupun swasta, untuk mendukung kegiatan riset, magang, dan pengembangan inovasi mahasiswa.</p>

    <h2><b>Informasi Tambahan</b></h2>
    <p>Informasi lain yang berkaitan dengan jurusan, seperti pengumuman kegiatan, peluang beasiswa, atau jadwal acara akademik, akan terus diperbarui melalui laman resmi dan kanal komunikasi jurusan.</p>
@endsection