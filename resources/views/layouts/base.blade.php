<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DLLAJ KOTA BOGOR">
    <meta name="keywords"
        content="dllaj kota bogor, cctv bogor, jalan bogor, lalu lintas kota bogor, cctv online, cctv online bogor, website dllaj kota bogor">
    <meta name="author" content="Bonet">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <title>DLLAJ KOTA BOGOR | TENTANG KAMI</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light ">
            <div class="container p-2">
                <a class="navbar-brand fw-bold mt-1 fs-4" href="#">
                    <img src="{{ url('assets/img/logo.png') }}" style="object-fit: cover;" alt="" width="35" height="35"
                        class="d-inline-block align-text-top">
                    DLLAJ KOTA BOGOR
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ms-auto mt-1" id="nav">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase active" aria-current="page" href="{{ route('index') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{ route('tentang') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{ route('kontak') }}">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')

    <footer class="position-relative mt-5">
        <div class="text-center text-white p-3 ">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <img src="{{ url('assets/img/logo.png') }}" style="object-fit: cover;" alt="" width="35" height="35"
                    class="d-inline-block align-text-top">
                DLLAJ KOTA BOGOR
            </a>
            <p class="mt-3"> Jl. Raya Tajur No.54, RT.01/RW.04, Pakuan, Kec. Bogor Sel., Kota Bogor, Jawa
                Barat 16134</p>
            <p>+622518333511</p>
            <div class="icons fs-4">
                <a href="www.twitter.com/dishubkotabogor" class="ms-3"><i class="bi bi-twitter"></i></a>
                <a href="www.instagram.com/dishubkotabogor" class="ms-3"><i class="bi bi-facebook"></i></a>
                <a href="www.facebook.com/dinasperhubungankotabogor" class="ms-3"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UC4oX4MvxKG8WVffUjcq5QdQ/featured" class="ms-3"><i
                        class="bi bi-youtube"></i></a>
            </div>
        </div>
        <div class=" text-center text-white p-3">
            <small class="text-muted">
                © 2020 Copyright:
                <a class="text-white" href="">DLLAJ KOTA BOGOR</a>
            </small>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
{{-- <script src="{{ url('assets/js/main.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@yield('js')
</body>

</html>
