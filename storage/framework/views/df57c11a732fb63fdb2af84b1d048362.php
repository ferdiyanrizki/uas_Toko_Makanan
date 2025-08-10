

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1>Daftar Makanan</h1>
    <a href="<?php echo e(route('makanan.create')); ?>" class="btn btn-primary mb-3">Tambah Makanan</a>
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $makanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($makanan->nama); ?></td>
                <td><?php echo e($makanan->deskripsi); ?></td>
                <td>Rp<?php echo e(number_format($makanan->harga,0,',','.')); ?></td>
                <td><?php echo e($makanan->stok); ?></td>
                <td><?php echo e($makanan->kategori); ?></td>
                <td>
                    <a href="<?php echo e(route('makanan.edit', $makanan)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('makanan.destroy', $makanan)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                    <a href="<?php echo e(route('pembelian.create', $makanan->id)); ?>" class="btn btn-success btn-sm mt-1">Beli</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel-main\resources\views/makanan/index.blade.php ENDPATH**/ ?>