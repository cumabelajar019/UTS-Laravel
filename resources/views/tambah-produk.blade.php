@extends('layouts.app')

@section('content')
    <h1>Form Tambah Produk</h1>

    <form action="#" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Produk</label>
            <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan kode produk">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama produk">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Produk</label>
            <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Masukkan jenis produk">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" id="harga" name="harga" class="form-control" placeholder="Masukkan harga produk">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
