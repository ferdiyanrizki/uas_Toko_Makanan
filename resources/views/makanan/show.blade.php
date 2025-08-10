@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Detail Makanan</h1>
    <div class="card">
        <div class="card-body">
            <h3>{{ $makanan->nama }}</h3>
            <p>{{ $makanan->deskripsi }}</p>
            <p>Harga: <b>Rp{{ number_format($makanan->harga,0,',','.') }}</b></p>
            <p>Stok: {{ $makanan->stok }}</p>
            <p>Kategori: {{ $makanan->kategori }}</p>
            <a href="{{ route('makanan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
