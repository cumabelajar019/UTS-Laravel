<?php

use Illuminate\Support\Facades\Route;

Route::get('/tambah-produk', function () {
    // Array jenis produk
    $jenisProduk = ["Pilih Produk", "Alat tulis", "Elektronik", "Sembako"];

    // Kirim data ke view
    return view('tambah-produk', compact('jenisProduk'));
});
