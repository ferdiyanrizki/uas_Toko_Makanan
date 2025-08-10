

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Bukti Pembelian</h2>
    <div class="card p-4">
        <h4 class="mb-3">Terima kasih, <?php echo e($transaksi->nama_pembeli); ?>!</h4>
        <p><b>Nama Makanan:</b> <?php echo e($transaksi->makanan->nama); ?></p>
        <p><b>Jumlah:</b> <?php echo e($transaksi->jumlah); ?></p>
        <p><b>Total Harga:</b> Rp<?php echo e(number_format($transaksi->total_harga,0,',','.')); ?></p>
        <p><b>Tanggal:</b> <?php echo e($transaksi->created_at->format('d M Y H:i')); ?></p>
        <a href="<?php echo e(route('makanan.index')); ?>" class="btn btn-primary mt-3">Kembali ke Daftar Makanan</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel-main\resources\views/pembelian/show.blade.php ENDPATH**/ ?>