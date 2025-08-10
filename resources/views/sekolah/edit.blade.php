@extends('layout')
@section('content')
<h4>Edit Sekolah</h4>
<form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
    @csrf @method('PUT')
    @include('sekolah.form', ['sekolah' => $sekolah])
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
<!-- Tidak digunakan, silakan gunakan fitur makanan -->
