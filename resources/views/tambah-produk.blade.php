@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1 class="mb-4">Form Tambah Produk</h1>
        
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Produk</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/produk" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection