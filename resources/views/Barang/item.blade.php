<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>barangs</title>
</head>
<body>
    @extends('layouts.app2')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-white"><h1>{{ __('List Barang') }}</h1></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-2"><a href="{{ route('barangs.create') }}" class="btn btn-info col-md-right">Create barang</a></div>
                                <div class="col-sm-2"><a href="/barang/cetak_pdf" class="btn btn-info " target="_blank"><i class="bi bi-download me-1"></i>CETAK PDF</a></div> 
                            </div>
                        <br>                   
                                <table class="table table-striped mt-3" id="barangs-table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                                <script src="https://code.jquery.com/jquery.js"></script>
                                <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
                                <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                <script>
                                    $(function() {
                                        $('#barangs-table').DataTable({
                                            processing: true,
                                            serverSide: true,
                                            ajax: '{!! route('barang.data') !!}', // memanggil route yang menampilkan data json
                                            columns: [{ // mengambil & menampilkan kolom sesuai tabel database
                                                    data: 'kode_barang',
                                                    name: 'kode_barang'
                                                },
                                                {
                                                    data: 'nama_barang',
                                                    name: 'nama_barang'
                                                },
                                                {
                                                    data: 'brand_barang',
                                                    name: 'brand_barang'
                                                }
                                            ]
                                        });
                                    });
                                </script>

                                @foreach ($barangs as $barang)
                                       <td scope="col">
                                       @include('barang.actions')
                                        </td>    
                                        @endforeach              
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
       
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>