@extends('layouts.base')


@section('content')
    <main class="container justify-content-center align-items-center">
        <div class="p-5">

            <!-- map cctv -->
            <div class="row">
                <div class="text mt-3 mb-4">
                    <p class="st fst-italic fs-3 fw-bold">Peta CCTV Lalu Lintas KOTA BOGOR</p>
                </div>
                <div class="col-md-12">
                    <div class="ratio ratio-16x9">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <!-- end map cctv -->


            <!-- judul -->
            <div class="row mt-5">
                <div class="col-md-7">
                    <div class="textt mt-3">
                        <p class="fst-italic fs-3 fw-bold">Pantauan Arus Lalu Lintas </p>
                        <p class="mt-4">Berikut lokasi yang termonitor oleh kamera CCTV di Kota Bogor</p>
                    </div>
                </div>
                <div class="col-md-6 ms-auto mt-4">
                    <!-- search -->
                    <div class="search">
                        <form class="d-flex w-100 ">
                            <input class="form-control me-2" type="search" placeholder="Cari cctv" aria-label="Search">
                            <button class="btn btn-outline-dark" type="submit" style="border-radius: 10px;"><i
                                    class="bi bi-search"></i></button>
                        </form>
                    </div>
                    <!-- end search -->
                </div>
            </div>
            <!-- end judul -->


            <!-- cctv card -->
            <div class="row mt-5">
                <div class="col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card border-0 shadow-sm" style="width: 100%; border-radius: 10px;">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/e8CLsYzE5wk" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body p-4">
                            <p class="card-text text-muted text-uppercase" style="font-size: 15px;">bogor selatan</p>
                            <p class="card-title  fs-4">Jalan Air mancur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card border-0 shadow-sm" style="width: 100%; border-radius: 10px;">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/e8CLsYzE5wk" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body p-4">
                            <p class="card-text text-muted text-uppercase" style="font-size: 15px;">bogor timur</p>
                            <p class="card-title  fs-4">Kebun Raya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card border-0 shadow-sm" style="width: 100%; border-radius: 10px;">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/e8CLsYzE5wk" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body p-4">
                            <p class="card-text text-muted text-uppercase" style="font-size: 15px;">bogor selatan</p>
                            <p class="card-title  fs-4">Jalan Tajur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="card border-0 shadow-sm" style="width: 100%; border-radius: 10px;">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/e8CLsYzE5wk" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body p-4">
                            <p class="card-text text-muted text-uppercase" style="font-size: 15px;">bogor utara</p>
                            <p class="card-title  fs-4">Jalan Sukasari</p>
                        </div>
                    </div>
                </div>

                <!-- pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- end pagination -->

            </div>
            <!-- end cctv card -->


        </div>
    </main>
@endsection
