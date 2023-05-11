<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olahraga Populer</title>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2022/09/11/06/01/apple-7446229_960_720.png"
        type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body>

    <section id="hero">
        <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color: #fff;">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="#">
                    <img src="https://cdn.pixabay.com/photo/2022/09/11/06/01/apple-7446229_960_720.png" width="30px">
                    Handphone.Com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link me-2" href="#hero">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="#merk-hanphone">Merek Handphone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
                <div class="col-md-4">
                    <div class="card shadow overflow-hidden border-0">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/23/iphone-13-pro-max_169.jpeg?w=700&q=90"
                            alt="">
                        <div class="p-3">
                            <p>Nama Handphone</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, vitae.....</p>
                            <button class="btn btn-costum">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow overflow-hidden border-0">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/23/iphone-13-pro-max_169.jpeg?w=700&q=90"
                            alt="">
                        <div class="p-3">
                            <p>Nama Handphone</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, vitae.....</p>
                            <button class="btn btn-costum">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow overflow-hidden border-0">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/23/iphone-13-pro-max_169.jpeg?w=700&q=90"
                            alt="">
                        <div class="p-3">
                            <p>Nama Hanphone</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, vitae.....</p>
                            <button class="btn btn-costum">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
