@extends('layouts.app2')
@section('content')
<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-white">
                    <h1>{{ __('Add Barang') }}</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('barangs.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}" placeholder="Enter First Name">
                        @error('kode_barang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Enter Last Name">
                        @error('nama_barang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="brand_barang" class="form-label">Brand Barang</label>
                        <input class="form-control @error('brand_barang') is-invalid @enderror" type="text" name="brand_barang" id="brand_barang" value="{{ old('brand_barang') }}" placeholder="Enter brand_barang">
                        @error('brand_barang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary "><i class="bi-check-circle me-2"></i> Add Barang </button>
                    
                    <a href="{{ route('barangs.index') }}" class="btn btn-danger"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    @include('sweetalert::alert')
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection