@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Pembelian: {{ $makanan->nama }}</h2>
    <form action="{{ route('pembelian.store', $makanan->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Nama Pembeli</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">-- Pilih Pembeli --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="{{ $makanan->stok }}" required>
            <small class="text-muted">Stok tersedia: {{ $makanan->stok }}</small>
        </div>
        <button type="submit" class="btn btn-success">Beli Sekarang</button>
        <a href="{{ route('makanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
