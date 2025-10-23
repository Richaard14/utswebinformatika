@extends('layout.layout')

@section('header')
      <div id="menubar">
        <ul id="menu">
          <li><a href="{{ url('/beranda') }}">Beranda</a></li>
          <li><a href="{{ url('/profil') }}">Profil</a></li>
          <li><a href="{{ url('/pendidikan') }}">Pendidikan</a></li>
          <li><a href="{{ url('/riset') }}">Riset</a></li>
          <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
          <li><a href="{{ url('/lain_lainya') }}">Lain-Lainnya</a></li>
        </ul>
      </div>
@endsection

@section('content')
    <h1>Hasil Pencarian</h1>
    <p>Hasil pencarian untuk: "{{ $query }}"</p>

    @if(count($results) > 0)
        <div class="search-results">
            @foreach($results as $result)
                <div class="result-item">
                    <h3><a href="{{ url($result['url']) }}">{{ $result['title'] }}</a></h3>
                    <p>{{ $result['content'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>Tidak ada hasil yang ditemukan.</p>
    @endif

    <div class="back-link">
        <a href="{{ url()->previous() }}">Kembali</a>
    </div>
@endsection