<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman home
Route::get('/', function () {
    return view('home');
});

// Route untuk halaman produk dengan data
Route::get('/produk', function () {
    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000]
    ];
    
    return view('produk', ['produk' => $produk]);
});

// Route untuk form tambah produk
Route::get('/tambah-produk', function () {
    return view('tambah-produk');
});
