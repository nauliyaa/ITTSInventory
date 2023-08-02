@extends('layouts.app')
@section('content')
<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-white">
                    <h1>{{ __('Add Barang') }}</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('forms.storeform') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_peminjam" class="form-label">Nama Mahasiswa</label>
                        <input class="form-control @error('nama_peminjam') is-invalid @enderror" type="text" name="nama_peminjam" id="nama_peminjam" value="{{ old('nama_peminjam') }}" placeholder="Enter Name">
                        @error('nama_peminjam')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ukmormawa_peminjam" class="form-label">UKM/Ormawa Mahasiswa</label>
                        <input class="form-control @error('ukmormawa_peminjam') is-invalid @enderror" type="text" name="ukmormawa_peminjam" id="ukmormawa_peminjam" value="{{ old('ukmormawa_peminjam') }}" placeholder="Enter UKM/Ormawa">
                        @error('ukmormawa_peminjam')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                    <label for="form" class="form-label">Barang yang Dipinjam</label>
                    <select name="form" id="form" class="form-select">
                        @foreach ($forms as $form)
                            <option value="{{ $form->id }}" {{ old('form') == $form->id ? 'selected' : '' }}> 
                                {{ $form->kode_barang.' - '.$form->nama_barang }} </option>
                        @endforeach
                    </select>
                    @error('form')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi-check-circle me-2"></i> Add Barang </button>
                    <a href="{{ route('barangs.indexmhs') }}" class="btn btn-danger"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection