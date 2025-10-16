@extends ('layout.layout')
@section('header')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li class="selected"><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection
@section ('content')
    <h1>Pendidikan</h1>
    <p>Berisi informasi mengenai pendidikan di jurusan Teknik Informatika Universitas Lampung.</p>
@endsection