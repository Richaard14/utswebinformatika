@extends ('layout.layout_admin.layout_1')

@section('admin_content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Pegawai</h1>
        </div>
        <!-- tombol tambah data -->
        <div class="d-grid gap-2 d-md-block">
        <a href="/pegawai/tambah">
        <button type="button" class="btn btn-success">Tambah</button>
        </a>
        </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Umur</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pegawai as $p)
    <tr>
      <th scope="row">{{$p->pegawai_id}}</th>
      <td> {{$p->pegawai_nama}}</td>
      <td> {{$p->pegawai_jabatan}}</td>
      <td> {{$p->pegawai_alamat}}</td>
      <td> {{$p->pegawai_umur}}</td>
    @endforeach
    </tr>
    </tr>
  </tbody>
</table>
@endsection

