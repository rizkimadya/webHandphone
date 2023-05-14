@extends('Layouts.admin.app', ['title' => 'Handphone'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <p class="fs-3 mb-0">Edit Data Hanphone</p>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <form action="{{ route('handphone.update', ['id' => $handphone->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label class="form-label">Gambar Lama</label>
                                <img class="d-block" src="/gambarhandphone/{{ $handphone->gambar }}" alt=""
                                    width="40%">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" value="{{ $handphone->merk }}"
                                    name="merk">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" value="{{ $handphone->harga }}"
                                    name="harga">
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
