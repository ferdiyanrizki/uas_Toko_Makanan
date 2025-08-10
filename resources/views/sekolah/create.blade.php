@extends('layout')
@section('content')
<h4>Tambah Sekolah</h4>
<form action="{{ route('sekolah.store') }}" method="POST">
    @csrf
    @include('sekolah.form')
    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
<!-- Tidak digunakan, silakan gunakan fitur makanan -->
