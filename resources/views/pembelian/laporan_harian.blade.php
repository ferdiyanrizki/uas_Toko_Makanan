@extends('layout')

@section('content')
<div class="container">
    <h1>Laporan Harian Pembelian</h1>
    <form method="GET" action="{{ route('pembelian.laporan_harian') }}" class="mb-3">
        <div class="row g-2 align-items-end">
            <div class="col-auto">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $tanggal }}">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Tampilkan</button>
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Makanan</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transaksis as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->user->name ?? '-' }}</td>
                <td>{{ $transaksi->makanan->nama ?? '-' }}</td>
                <td>{{ $transaksi->jumlah }}</td>
                <td>Rp{{ number_format($transaksi->total,0,',','.') }}</td>
                <td>{{ $transaksi->created_at->format('H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada pembelian pada tanggal ini.</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">Total</th>
                <th colspan="2">Rp{{ number_format($total,0,',','.') }}</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
