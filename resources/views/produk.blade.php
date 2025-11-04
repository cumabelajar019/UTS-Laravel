@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Halaman Produk</h1>
        <a href="{{ url('/tambah-produk') }}" class="btn btn-primary">Tambah Produk</a>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
                <tr>
                    <td>{{ $p['kode'] }}</td>
                    <td>{{ $p['nama'] }}</td>
                    <td>{{ $p['jenis'] }}</td>
                    <td>{{ number_format($p['harga'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
