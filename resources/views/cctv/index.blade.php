@extends('layouts.admin')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
@endsection


@section('header')
    <div class="section-header">
        <h1>CCTV</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a>Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('cctv.index') }}">CCTV</a></div>

        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <br>
            @if (Session::has('message'))
                <div class="alert alert-{{ session('status') }}">
                    <h6 class="mt-2">{{ session('message') }}</h6>
                </div>
            @endif
            <br>




            <div class="d-flex justify-content-end">
                <a href="{{ route('cctv.create') }}" class="btn btn-success">Buat CCTV</a>

            </div>
            <br>



           <div class="row justify-content-center">
               <div class="col-md-12">
               <table id="example" class="table table-striped" >
                <thead>
                    <tr>
                        <th>Owner</th>
                        <th>IP Address</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Link</th>
                        <th>Latitude</th>
                        <th>Longitude</th>

                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cctv as $item)
                        <tr>
                            <td>{{ $item->owner }}</td>
                            <td>{{ $item->ip_address }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->link }}</td>
                            <td>{{ $item->latitude }}</td>
                            <td>{{ $item->longitude }}</td>

                            <td class="d-flex justify-content-end">
                                <a class="btn btn-info" href="{{ route('cctv.edit', ['id' => $item->id]) }}">Update</a>
                                <a class="btn btn-danger text-light ms-4"
                                    data-href="{{ route('cctv.delete', ['id' => $item->id]) }}"
                                    onclick="deleteData(this)">Delete</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>
               </div>
           </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function deleteData(e) {
            // e.preventDefault();
            swal({
                    title: "Apakah anda yakin?",
                    text: "Jika sudah di hapus maka data tidak akan bisa di kembalikan",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((hapus) => {
                    // console.log($(e).attr('data-href'));
                    if (hapus) {
                        swal("Data terhapus", {
                            icon: "success",
                        });
                        window.location.href = $(e).attr('data-href');
                    } else {
                        swal("Data aman");
                    }
                });
        }
    </script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    'paginate': {
                        'previous': '<i class="bi bi-arrow-left-circle"></i>',
                        'next': '<i class="bi bi-arrow-right-circle"></i>'
                    }
                }
            });
        });
    </script>



@endsection
