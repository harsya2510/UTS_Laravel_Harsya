@extends('layouts.app')

@section('content')
<style>
    .form-select option:hover,
    .form-select option:focus,
    .form-select option:active,
    .form-select option:checked {
        background: linear-gradient(#0d6efd, #0d6efd) !important;
        background-color: #0d6efd !important;
        color: white !important;
    }
    
    .form-select:hover,
    .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .form-select option:hover {
        background-color: #0d6efd !important;
        color: white !important;
    }
</style>
<div class="container mt-4">
    <h1 class="mb-4">Form Tambah Produk</h1>
    
    <form action="#" method="POST">
        @csrf
        <div class="row g-3">
            <!-- Input Kode Produk -->
            <div class="col-md-4">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Input Kode Produk" required>
            </div>

            <!-- Input Nama Produk -->
            <div class="col-md-4">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Produk" required>
            </div>

            <!-- Select Jenis Produk dengan loop -->
            <div class="col-md-4">
                <label for="jenis" class="form-label">Jenis Produk</label>
                <select class="form-select" id="jenis" name="jenis" required>
                    @foreach($jenisProduk as $jenis)
                        <option value="{{ $jenis }}" {{ $loop->first ? 'disabled selected' : '' }}>
                            {{ $jenis }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Input Harga -->
            <div class="col-md-6">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Input Harga" required>
            </div>

            <!-- Tombol Simpan -->
            <div class="col-md-6">
                <label class="form-label">&nbsp;</label>
                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection