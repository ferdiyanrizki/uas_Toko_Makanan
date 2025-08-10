@php $s = $sekolah ?? null; @endphp
<div class="mb-3">
    <label>Nama</label>
    <input name="nama" value="{{ old('nama', $s->nama ?? '') }}" class="form-control">
</div>
<!-- Tidak digunakan, silakan gunakan fitur makanan -->
<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control">{{ old('alamat', $s->alamat ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Telepon</label>
    <input name="telepon" value="{{ old('telepon', $s->telepon ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Email</label>
    <input name="email" value="{{ old('email', $s->email ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Jenis Sekolah</label>
    <input name="jenis_sekolah" value="{{ old('jenis_sekolah', $s->jenis_sekolah ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Status Sekolah</label>
    <input name="status_sekolah" value="{{ old('status_sekolah', $s->status_sekolah ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Akreditasi</label>
    <input name="akreditasi" value="{{ old('akreditasi', $s->akreditasi ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Website</label>
    <input name="website" value="{{ old('website', $s->website ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Latitude</label>
    <input name="latitude" value="{{ old('latitude', $s->latitude ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Longitude</label>
    <input name="longitude" value="{{ old('longitude', $s->longitude ?? '') }}" class="form-control">
</div>
