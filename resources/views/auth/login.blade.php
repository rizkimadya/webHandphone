@extends('Layouts.user.app', ['title' => 'Login'])

@section('content')
    <section id="login">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-7">
                    <img src="https://img.freepik.com/free-vector/realistic-smartphone-device_52683-29765.jpg" alt=""
                        width="100%">
                </div>
                <div class="col-md-5 align-self-center">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://cdn.pixabay.com/photo/2022/09/11/06/01/apple-7446229_960_720.png" alt=""
                            width="40px">
                        <p class="title ms-2">Hanphone.Com</p>
                    </div>
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if (session('wait'))
                        <p class="alert alert-warning">{{ session('wait') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                placeholder="Masukkan Username">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Masukkan Password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-costum w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
