@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Form Tambah Produk</h1>
    
    <form action="#" method="POST">
        @csrf
        <div class="row g-3">
            <!-- Baris pertama: 3 input sejajar -->
            <div class="col-md-4">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Input Kode Produk" required>
            </div>

            <div class="col-md-4">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Produk" required>
            </div>

            <div class="col-md-4">
                <label for="jenis" class="form-label">Jenis Produk</label>
                <select class="form-select" id="jenis" name="jenis" required>
                    <option selected disabled value="">Pilih Produk</option>
                    <option value="Alat Tulis">Alat Tulis</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Baris kedua: input harga dan tombol -->
            <div class="col-md-6">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Input Harga" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">&nbsp;</label>
                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection