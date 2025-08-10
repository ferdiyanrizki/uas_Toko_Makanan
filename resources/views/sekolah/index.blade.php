@extends('layout')
@section('content')
<a href="{{ route('sekolah.create') }}" class="btn btn-primary mb-3">Tambah Sekolah</a>
<!-- Tidak digunakan, silakan gunakan fitur makanan -->
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- <div id="map"></div> --}}

<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Akreditasi</th>
            <th>Koordinat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sekolahs as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->telepon }}</td>
                <td>{{ $s->jenis_sekolah }}</td>
                <td>{{ $s->status_sekolah }}</td>
                <td>{{ $s->akreditasi }}</td>
                <td>{{ $s->latitude }}, {{ $s->longitude }}</td>
                <td>
                    <a href="{{ route('sekolah.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sekolah.destroy', $s->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Halaman sekolah sudah tidak digunakan. Silakan gunakan halaman makanan untuk fitur utama. -->
@endsection