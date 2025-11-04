@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Form Tambah Produk</h1>

    <form>
        <!-- Baris Pertama -->
        <div class="row g-3">
            <div class="col-md-4">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" id="kode" class="form-control" placeholder="Input Kode Produk">
            </div>
            <div class="col-md-4">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" id="nama" class="form-control" placeholder="Input Nama Produk">
            </div>
            <div class="col-md-4">
                <label for="jenis" class="form-label">Jenis Produk</label>
                <select id="jenis" class="form-control">
                    <option selected>Pilih Produk</option>
                    <option>Alat Tulis</option>
                    <option>Elektronik</option>
                    <option>Lainnya</option>
                </select>
            </div>
        </div>

        <!-- Baris Kedua -->
        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" id="harga" class="form-control" placeholder="Input Harga">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
