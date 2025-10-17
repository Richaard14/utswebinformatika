@extends ('layout.layout')
@section('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li   class="selected"><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section ('content')
    <h1><b>Visi</b></h1>
    <p>Menjadi program studi yang terpercaya dan terkemuka dalam bidang komputer sains untuk sektor kesehatan yang berwawasan nasional dan internasional serta berperan dalam peningkatan kualitas iman kepercayaan, ilmu pengetahuan dan teknologi, yang merupakan karunia Tuhan, untuk kecerdasan dan kesejahteraan umat manusia serta kehidupan yang lebih baik dan berkelanjutan.</p>
    <h2><b>Misi</b></h2>
    <ul>
        <li>Membentuk lulusan yang memiliki jiwa kepemimpinan serta berdedikasi pada perilaku etis, bertanggung jawab berlandaskan layanan penuh kasih</li>
        <li>Membentuk lulusan yang memiliki kemampuan meneliti, kreatif, dan inovatif dalam bidang komputer sains untuk sektor kesehatan yang berjiwa kewirausahaan</li>
        <li>Membentuk lulusan yang memiliki kepedulian untuk kehidupan berkelanjutan.</li>
    </ul>
    <h3><b>Tujuan</b></h3>
    <ol>
        <li>Terbentuknya lulusan yang memiliki jiwa kepemimpinan serta berdedikasi pada perilaku etis, bertanggung jawab berlandaskan layanan penuh kasih;</li>
        <li>Terbentuknya lulusan yang memiliki kemampuan meneliti, kreatif, dan inovatif dalam bidang komputer sains untuk sektor kesehatan yang berjiwa kewirausahaan;</li>
        <li>Terbentuknya lulusan yang memiliki kepedulian untuk kehidupan berkelanjutan.</li>
    </ol>
@endsection

