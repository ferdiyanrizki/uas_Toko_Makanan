<?php $s = $sekolah ?? null; ?>

<div class="mb-3">
    <label>Nama</label>
    <input name="nama" value="<?php echo e(old('nama', $s->nama ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $s->alamat ?? '')); ?></textarea>
</div>

<div class="mb-3">
    <label>Telepon</label>
    <input name="telepon" value="<?php echo e(old('telepon', $s->telepon ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Email</label>
    <input name="email" value="<?php echo e(old('email', $s->email ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Jenis Sekolah</label>
    <input name="jenis_sekolah" value="<?php echo e(old('jenis_sekolah', $s->jenis_sekolah ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Status Sekolah</label>
    <input name="status_sekolah" value="<?php echo e(old('status_sekolah', $s->status_sekolah ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Akreditasi</label>
    <input name="akreditasi" value="<?php echo e(old('akreditasi', $s->akreditasi ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Website</label>
    <input name="website" value="<?php echo e(old('website', $s->website ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Latitude</label>
    <input name="latitude" value="<?php echo e(old('latitude', $s->latitude ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Longitude</label>
    <input name="longitude" value="<?php echo e(old('longitude', $s->longitude ?? '')); ?>" class="form-control">
</div>
<?php /**PATH C:\xampp\htdocs\uas_laravel-main\resources\views/sekolah/form.blade.php ENDPATH**/ ?>