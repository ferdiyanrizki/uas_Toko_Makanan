<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('sekolah.create')); ?>" class="btn btn-primary mb-3">Tambah Sekolah</a>

<?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>



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
        <?php $__currentLoopData = $sekolahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($s->nama); ?></td>
                <td><?php echo e($s->alamat); ?></td>
                <td><?php echo e($s->telepon); ?></td>
                <td><?php echo e($s->jenis_sekolah); ?></td>
                <td><?php echo e($s->status_sekolah); ?></td>
                <td><?php echo e($s->akreditasi); ?></td>
                <td><?php echo e($s->latitude); ?>, <?php echo e($s->longitude); ?></td>
                <td>
                    <a href="<?php echo e(route('sekolah.edit', $s->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('sekolah.destroy', $s->id)); ?>" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<script>
    var map = L.map('map').setView([-6.4025, 106.7942], 12); // Koordinat default Depok

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Leaflet &copy; OpenStreetMap'
    }).addTo(map);

    <?php $__currentLoopData = $sekolahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        L.marker([<?php echo e($s->latitude); ?>, <?php echo e($s->longitude); ?>])
            .addTo(map)
            .bindPopup("<strong><?php echo e($s->nama); ?></strong><br><?php echo e($s->alamat); ?>");
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel-main\resources\views/sekolah/index.blade.php ENDPATH**/ ?>