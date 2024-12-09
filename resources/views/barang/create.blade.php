@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 border col-xl-6">
                        <div class="mb-3 text-center">
                            <h4>Input Barang</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="code" class="form-label">Kode Barang</label>
                                <input class="form-control @error('code') is-invalid @enderror" type="text"
                                    name="code" id="code" value="{{ old('code') }}"
                                    placeholder="Enter Kode Barang">
                                @error('code')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Barang</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" id="name" value="{{ old('name') }}"
                                    placeholder="Enter Nama Barang">
                                @error('name')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input class="form-control @error('harga') is-invalid @enderror" type="text"
                                    name="harga" id="harga" value="{{ old('harga') }}" placeholder="Enter Harga">
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="deskripsi" class="form-label">Deskrispsi</label>
                                <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi"
                                    id="deskripsi" value="{{ old('deskripsi') }}" placeholder="Enter Deskripsi">
                                @error('deskripsi')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="formlabel">Satuan</label>
                                <select name="satuan" id="satuan" class="formselect">
                                    @foreach ($satuans as $satuan)
                                        <option value="{{ $satuan->id }}"
                                            {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                            {{ $satuan->code . ' - ' . $satuan->name }}</option>
                                    @endforeach
                                </select>
                                @error('satuan')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i>
                                    Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
