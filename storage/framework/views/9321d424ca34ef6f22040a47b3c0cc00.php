<?php $__env->startSection('content'); ?>
<h4>Tambah Sekolah</h4>
<form action="<?php echo e(route('sekolah.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('sekolah.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <button class="btn btn-success">Simpan</button>
    <a href="<?php echo e(route('sekolah.index')); ?>" class="btn btn-secondary">Kembali</a>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel-main\resources\views/sekolah/create.blade.php ENDPATH**/ ?>