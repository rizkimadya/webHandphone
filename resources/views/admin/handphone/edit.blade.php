@extends('Layouts.admin.app', ['title' => 'Handphone'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <p class="fs-3 mb-0">Edit Data Hanphone</p>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Gambar Lama</label>
                            <img src="" alt="" height="40px">
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" value="" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" value="" name="merk">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                                <input type="text" class="form-control" id="deskripsi" value="" name="deskripsi">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" value="" name="harga">
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('handphone') }}" class="btn btn-danger">Kembali</a>
                                <a href="" class="btn btn-success">Submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
