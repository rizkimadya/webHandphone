@extends('Layouts.admin.app', ['title' => 'Handphone'])

@section('content')
    <div class="row">
        <div class="col-12">
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
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="https://cdn.pixabay.com/photo/2022/09/11/06/01/apple-7446229_960_720.png" alt=""
                                width="50px">
                        </td>
                        <td>Iphone</td>
                        <td>Rp. 2.000.000</td>
                        <td>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
