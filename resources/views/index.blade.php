@extends('layouts.base')


@section('content')
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
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
                @foreach ($data as $item)
                    <div class="col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="card border-0 shadow-sm" style="width: 100%; border-radius: 10px;">
                            <div class="ratio ratio-16x9">
                                <video id="video{{ $item->id }}" src="{{ $item->link }}" controls width="200px"
                                    height="200px"></video>
                            </div>
                            <div class="card-body p-4">
                                <p class="card-text text-muted text-uppercase" style="font-size: 15px;">{{ $item->owner }}
                                </p>
                                <p class="card-title  fs-4">{{ $item->lokasi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- end cctv card -->
            {{ $data->links() }}

        </div>
    </main>
@endsection


@section('js')
    <script>
        if (Hls.isSupported()) {
            @foreach ($data as $item)
                var video = document.getElementById('video{{ $item->id }}');
                var hls = new Hls();
                hls.loadSource('{{ $item->link }}');
                hls.attachMedia(video);
                hls.on(Hls.Events.MANIFEST_PARSED, function() {
                video.play();
                });
            @endforeach
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {

            @foreach ($data as $item)
                video.src = '{{ $item->link }}';
                video.addEventListener('canplay', function() {
                video.play();
                });
            @endforeach
        }
    </script>



<script>


</script>
@endsection
