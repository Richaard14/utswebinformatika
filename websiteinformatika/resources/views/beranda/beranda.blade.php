@extends ('layout.layout')
@section('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li  class="selected"><a href="{{ url('/beranda') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section('content')
        <h1><b>APA ITU INFORMATIKA?</b></h1>
        <p>Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. Di Jurusan Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali pula dengan keterampilan merancang perangkat lunak.</p>
        <p>Perlu kamu ketahui, pesatnya perkembangan teknologi membuat Jurusan Teknik Informatika menjadi salah satu jurusan yang memiliki banyak peminat. Pada SBMPTN 2021, Jurusan Informatika menjadi 5 besar jurusan paling diminati di rumpun saintek. Tidaklah mengherankan, karena jenis pekerjaan menjanjikan di masa depan berhubungan erat dengan lulusan dari jurusan ini. Belum lagi, besaran penghasilan yang berpotensi didapatkan pun sangatlah besar. Agar lebih memahami jurusan IT ini, mari kita pelajari lebih lanjut.</p>
        <h1><b>Prospek Kerja Lulusan Teknik Informatika</b></h1>
        <p>Prospek kerja jurusan informatika sangat luas di berbagai sektor, tidak hanya sebagai programmer, tetapi juga mencakup profesi seperti Software Engineer, Data Scientist, Cybersecurity Specialist, AI/Machine Learning Engineer, dan Mobile App Developer. Lulusan informatika juga bisa bekerja di bidang seperti analisis data, pengembangan web, jaringan, hingga menjadi konsultan IT dan dapat bekerja di berbagai industri, termasuk teknologi, perbankan, e-commerce, kesehatan, dan pemerintahan.</p>
        <ul>
          <li><b>Apa itu informatika?</b></li>
          <li><b>Perkembangan Teknologi</b></li>
          <li><b>Prospek Kerja</b></li>
        </ul>
@endsection