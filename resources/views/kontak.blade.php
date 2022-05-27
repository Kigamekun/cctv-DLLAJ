@extends('layouts.base')


@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-7">
                <h1 class="display-5">Contact Me</h1>
                <p class="text-muted">jika ada yang ingin ditanya silahkan isi form di bawah</p>
                <hr>
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="inputNama" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" id="inputEmail" class="form-control">
                        </div>
                        <div class="col">
                            <label for="text-area" class="form-label">Pesan</label>
                            <textarea class="form-control" id="text-area" rows="5"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5 mt-4">
                <div class="ratio ratio-1x1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.140245760138!2d106.82152684983129!3d-6.629497366626167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c60051a901e3%3A0xe70f7310b6bd6be6!2sDinas%20Lalu%20Lintas%20Dan%20Angkutan%20Jalan%20(Dllaj)%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1645168352579!5m2!1sid!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
