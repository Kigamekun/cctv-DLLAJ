@extends('layouts.admin')

@section('css')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }

    </style>


    <div class="card">

        <div class="card-body">
            @if ($act == 'create')
                @section('header')
                    <div class="section-header">
                        <h1>Buat CCTV</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a>Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="{{ route('cctv.index') }}">CCTV</a>
                            </div>

                        </div>
                    </div>
                @endsection
                <br>
                <center>
                    <h1>Buat CCTV</h1>
                </center>
                <br>
                <form action="{{ route('cctv.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="owner" class="form-label">owner</label>
                        <input type="text" class="form-control" id="owner" name="owner" placeholder="isi owner " required>
                    </div>


                    <div class="mb-3">
                        <label for="ip_address" class="form-label">ip_address</label>
                        <input type="text" class="form-control" id="ip_address" name="ip_address"
                            placeholder="isi ip_address " required>
                    </div>

                    <div class="mb-3">
                        <label for="lokasi" class="form-label">lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="isi lokasi "
                            required>
                    </div>

                    <label for="link" class="form-label">Status</label>
                    <div class="mb-3">
                        <input type="checkbox" data-toggle="toggle" name="status" data-onstyle="primary">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">link</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="isi link " required>
                    </div>

                    <div class="mb-3">
                        <label for="latitude" class="form-label">latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="isi latitude " required>
                    </div>

                    <div class="mb-3">
                        <label for="longitude" class="form-label">longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="isi longitude " required>
                    </div>

                    <br>
                    <center> <button class="btn btn-success" type="submit">Submit</button>
                    </center>
                </form>
            @else
                @section('header')
                    <div class="section-header">
                        <h1>Edit CCTV</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a>Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="{{ route('cctv.index') }}">CCTV</a>
                            </div>

                        </div>
                    </div>
                @endsection
                <br>
                <center>
                    <h1>Edit CCTV</h1>
                </center>
                <br>

                <form action="{{ route('cctv.update', ['id' => $data->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="owner" class="form-label">owner</label>
                        <input type="text" class="form-control" id="owner" name="owner" placeholder="isi owner "
                            value="{{ $data->owner }}" required>
                    </div>


                    <div class="mb-3">
                        <label for="ip_address" class="form-label">ip_address</label>
                        <input type="text" class="form-control" id="ip_address" name="ip_address"
                            placeholder="isi ip_address " value="{{ $data->ip_address }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="lokasi" class="form-label">lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="isi lokasi "
                            value="{{ $data->lokasi }}" required>
                    </div>

                    <label for="link" class="form-label">Status</label>
                    <div class="mb-3">
                        @if ($data->status)
                        <input type="checkbox" data-toggle="toggle" name="status" data-onstyle="primary" checked>
                        @else
                        <input type="checkbox" data-toggle="toggle" name="status" data-onstyle="primary">
                        @endif

                    </div>


                    <div class="mb-3">
                        <label for="link" class="form-label">link</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="isi link "
                            value="{{ $data->link }}" required>
                    </div>


                    <div class="mb-3">
                        <label for="latitude" class="form-label">latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude"
                            placeholder="isi latitude " value="{{ $data->latitude }}" required>
                    </div>


                    <div class="mb-3">
                        <label for="longitude" class="form-label">longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude"
                            placeholder="isi longitude " value="{{ $data->longitude }}" required>
                    </div>

                    <br>
                    <center> <button class="btn btn-success" type="submit">Submit</button>
                    </center>
                </form>
            @endif


        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!--Ionicon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Table Js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
