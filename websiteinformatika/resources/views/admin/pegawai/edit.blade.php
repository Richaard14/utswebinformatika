@extends ('layout.layout_admin.layout_1')

@section('admin_content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data Pegawai</h1>
        </div>
        <div class="d-grid gap-2 d-md-block">
        <a href="/pegawai/">
        <button type="button" class="btn btn-danger">Kembali</button>
        </a>
        </div>

<form action="/pegawai/update/{{$pegawai->pegawai_id}}" method="POST">
  {{ csrf_field() }}

  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama" name="Nama" value="{{$pegawai->pegawai_nama}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Jabatan" name="Jabatan" value="{{$pegawai->pegawai_jabatan}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="Umur" name="Umur" value="{{$pegawai->pegawai_umur}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Alamat" name="Alamat" value="{{$pegawai->pegawai_alamat}}">
    </div>
  </div>

  <!-- Tombol buka modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
    Simpan
  </button>

  <!-- Modal Konfirmasi -->
  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slide">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <button type="button" class="btn btn-warning">Apakah Anda yakin ingin menyimpan perubahan data pegawai ini?</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ya, Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>

<style>
  .modal-dialog-slide {
    transform: translateY(50px);
    transition: transform 0.3s ease-out;
  }
  .modal.fade.show .modal-dialog-slide {
    transform: translateY(0);
  }
</style>
@endsection
