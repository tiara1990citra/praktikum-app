@extends('index')
@section('konten')
<div id="konten-utama">
    <div class="container-fluid">
        <div class="header d-flex w-100 py-3">
            <h5 class="h4 fw-bold text-black-50 text-uppercase">Data Pelanggan</h5>
        </div><!-- Akhir header -->

        <!-- Flexibel Konten -->
        <div class="card card-body bg-white border-0 shadow">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6 col-12 mb-2">
                        <label for="id_pelanggan" class="form-label text-black-50">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control bg-body-tertiary"
                            placeholder="Masukkan  ID Pelanggan" readonly>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="nama_pelanggan" class="form-label text-black-50">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control"
                            placeholder="Masukkan Nama Pelanggan">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="alamat" class="form-label text-black-50">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control"
                            placeholder="Masukkan alamat">
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <label for="telepon" class="form-label text-black-50">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control"
                            placeholder="Masukkan telepon">
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-sm btn-danger bg-gradient px-5">Hapus <i class="bi-trash"></i></a>
                        <button class="btn btn-sm btn-success bg-gradient px-5">Batal <i class="bi-x"></i></button>
                        <button class="btn btn-sm btn-primary bg-gradient px-5">Simpan <i class="bi-save2"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card card-body bg-white mt-3 border-0 shadow">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>ID Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>1</td>
                        <td>John Doe</td>
                        <td>123 Jl. Kebon Jeruk</td>
                        <td>08123456789</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="bi-pencil small"></i></a>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>2</td>
                        <td>John Doe</td>
                        <td>123 Jl. Kebon Jeruk</td>
                        <td>08123456789</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="bi-pencil small"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Akhir Flexibel Konten -->
    </div>
</div>
<!-- Akhir Konten Utama -->
</div>
@endsection