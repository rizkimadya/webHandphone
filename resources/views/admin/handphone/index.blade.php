@extends('Layouts.admin.app', ['title' => 'Handphone'])

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between mb-3">
            <p class="fs-3 mb-0">Data Hanphone</p>
            <a href="{{ route('handphone.create') }}" class="btn btn-costum mt-1">Tambah Data</a>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Merk Hanphone</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($handphone as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="/gambarhandphone/{{ $item->gambar }}" alt="" height="50px">
                                </td>
                                <td>{{ $item->merk }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('handphone.edit') }}" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
