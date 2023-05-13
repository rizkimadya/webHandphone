@extends('Layouts.admin.app', ['title' => 'Handphone'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <p class="fs-3 mb-0">Tambah Data Handphone</p>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <form action="{{ route('handphone.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar" required>
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" required
                                    placeholder="Masukkan Merk Handphone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required
                                    placeholder="Masukkan Deskripsi Singkat">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" required
                                    placeholder="Masukkan Harga Hanphone">
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('handphone') }}" class="btn btn-danger">Kembali</a>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
