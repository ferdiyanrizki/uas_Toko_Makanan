@extends('layout')

@section('content')
<div class="container">
    <h1>Tambah Penjualan</h1>
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Pembeli</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">-- Pilih Pembeli --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="makanan_id" class="form-label">Makanan</label>
            <select name="makanan_id" id="makanan_id" class="form-control" required>
                <option value="">-- Pilih Makanan --</option>
                @foreach($makanans as $makanan)
                    <option value="{{ $makanan->id }}">{{ $makanan->nama }} (Rp{{ number_format($makanan->harga,0,',','.') }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
