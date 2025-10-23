@extends ('layout.layout_admin.layout_1')

@section('admin_content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Data Pegawai</h1>
        </div>
        <div class="d-grid gap-2 d-md-block">
        <a href="/pegawai/">
        <button type="button" class="btn btn-danger">Kembali</button>
        </a>
        </div>

<form action="/pegawai/store" method="POST">
    {{ csrf_field() }}
  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Richard">
    </div>
  </div>
    <div class="row mb-3">
    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Web Developer">
    </div>
          </div>
    <div class="row mb-3">
    <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="Umur" name="Umur" placeholder="20">
    </div>
         </div>
    <div class="row mb-3">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="Alamat" name="Alamat" rows="3" placeholder="Jakarta"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection