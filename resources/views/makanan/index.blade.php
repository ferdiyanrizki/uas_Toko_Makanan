@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Daftar Makanan</h1>
    <a href="{{ route('makanan.create') }}" class="btn btn-primary mb-3">Tambah Makanan</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($makanans as $makanan)
            <tr>
                <td>{{ $makanan->nama }}</td>
                <td>{{ $makanan->deskripsi }}</td>
                <td>Rp{{ number_format($makanan->harga,0,',','.') }}</td>
                <td>{{ $makanan->stok }}</td>
                <td>{{ $makanan->kategori }}</td>
                <td>
                    <a href="{{ route('makanan.edit', $makanan) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('makanan.destroy', $makanan) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                    <a href="{{ route('pembelian.create', $makanan->id) }}" class="btn btn-success btn-sm mt-1">Beli</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
