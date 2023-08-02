@extends('layouts.app2')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-11">
                    <h2>{{ __('Selamat Datang!') }}</h2>
                    <div class="row justify-content-center">
        <div class="col-sm-6">
            <p> ITTS Inventory merupakan sebuah website peminjaman aset barang maupun alat yang ada di IT Telkom Surabaya dengan pihak logistik sebagai adminnya. Terciptanya website ini diharapkan dapat mempermudah mahasiswa dalam peminjaman, sekaligus logistik dalam mengelola barang/alat di IT Telkom Surabaya</p>
        </div>
        <div class="col-sm-6">
            <img src ="{{ Vite::asset('resources/images/image.png') }}" alt="image" class="img-fluid">
        </div>
    </div>
    @vite('resources/js/app.js')
                </div>
           
    </div>
</div>
@endsection
