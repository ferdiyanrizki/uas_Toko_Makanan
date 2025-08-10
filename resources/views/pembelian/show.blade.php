@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Bukti Pembelian</h2>
    <div class="card p-4">
    <h4 class="mb-3">Terima kasih, {{ $transaksi->user->name ?? '-' }}!</h4>
    <p><b>Nama Makanan:</b> {{ $transaksi->makanan->nama }}</p>
    <p><b>Jumlah:</b> {{ $transaksi->jumlah }}</p>
    <p><b>Total Harga:</b> Rp{{ number_format($transaksi->total,0,',','.') }}</p>
    <p><b>Tanggal:</b> {{ $transaksi->created_at->format('d M Y H:i') }}</p>
        <a href="{{ route('makanan.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Makanan</a>
    </div>
</div>
@endsection
