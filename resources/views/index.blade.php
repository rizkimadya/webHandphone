@extends('Layouts.user.app', ['title' => 'Beranda'])

@section('content')
    <section id="hero">
    </section>
    <section id="merk-hanphone">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="title">Merk Handphone</p>
                    <p class="subtitle">Beberapa Merk Handphone</p>
                </div>
            </div>
            <div class="row">
                @foreach ($handphone as $item)
                    <div class="col-md-4 mb-md-4 mb-3">
                        <div class="card shadow border-0 p-3">
                            <img src="/gambarhandphone/{{ $item->gambar }}"
                                style="width: 100%; height:310px; object-fit: cover;">
                            <div class="d-flex my-2">
                                <p class="fs-5">{{ $item->merk }}</p>
                                <p class="ms-auto fs-5 text-danger fw-bold">Rp
                                    {{ number_format($item->harga, 0, ',', '.') }}</p>
                            </div>
                            <button type="button" class="btn btn-costum liveToastBtn" data-item-merk="{{ $item->merk }}"
                                data-item-gambar="{{ $item->gambar }}">Tambahkan di
                                Keranjang</button>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-end">
                    {!! $handphone->fragment('merk-hanphone')->links('vendor.pagination.bootstrap-4') !!}
                </div>

                <div class="toast-container position-fixed top-0 mt-5 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img id="liveToastImg" src="" class="rounded me-2" width="40px">
                            <strong class="me-auto" id="liveToastMerk"></strong>
                            <small>Baru Saja</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Handphone Merk <span class="fw-semibold" id="liveToastMerkDetail"></span> berhasil ditambahkan
                            pada keranjang
                        </div>
                    </div>
                </div>

                <script>
                    const toastTriggers = document.querySelectorAll('.liveToastBtn');
                    const toastLiveExample = document.getElementById('liveToast');
                    const liveToastMerk = document.getElementById('liveToastMerk');
                    const liveToastMerkDetail = document.getElementById('liveToastMerkDetail');
                    const liveToastImg = document.getElementById('liveToastImg');

                    toastTriggers.forEach((toastTrigger) => {
                        toastTrigger.addEventListener('click', () => {
                            const merk = toastTrigger.getAttribute('data-item-merk');
                            const gambar = toastTrigger.getAttribute('data-item-gambar');
                            liveToastMerk.innerText = merk;
                            liveToastMerkDetail.innerText = merk;
                            liveToastImg.setAttribute('src', '/gambarhandphone/' + gambar);
                            const toast = new bootstrap.Toast(toastLiveExample);

                            toast.show();
                        });
                    });
                </script>

            </div>
        </div>
    </section>
@endsection




<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>
