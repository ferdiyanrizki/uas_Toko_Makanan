

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Pembelian: <?php echo e($makanan->nama); ?></h2>
    <form action="<?php echo e(route('pembelian.store', $makanan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="user_id" class="form-label">Nama Pembeli</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">-- Pilih Pembeli --</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="<?php echo e($makanan->stok); ?>" required>
            <small class="text-muted">Stok tersedia: <?php echo e($makanan->stok); ?></small>
        </div>
        <button type="submit" class="btn btn-success">Beli Sekarang</button>
        <a href="<?php echo e(route('makanan.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel-main\resources\views/pembelian/create.blade.php ENDPATH**/ ?>