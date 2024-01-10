

<?php $__env->startSection('content'); ?>

<div class="container mt-3">
    <form class="d-flex" method="GET" style="width: 350px; display:flex; margin-bottom:-35px;">
        <input class="form-control me-2" type="date" placeholder="Search" name="date" aria-label="Search">
        <button class="btn btn-info me-2" type="submit">Search</button>
        <button class="btn btn-secondary" type="submit">Clear</button>
    </form>
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo e(route('kasir.order.create')); ?>" class="btn btn-primary">Pembelian Baru</a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Total Bayar</th>
                <th>Kasir</th>
                <th>Tanggal Pembelian</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($no++); ?></td>
                <td><?php echo e($item['name_customer']); ?></td>
                <td>
                    <?php $__currentLoopData = $item['medicines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ol>
                        <li>
                            <?php echo e($medicine['name_medicine']); ?> ( <?php echo e(number_format($medicine['price'], 0, ',', '.')); ?> ) : Rp.
                            <?php echo e(number_format($medicine['sub_price'], 0, ',', '.')); ?> <small>qty <?php echo e($medicine['qty']); ?></small>
                        </li>
                    </ol>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td> Rp. <?php echo e(number_format($item['total_price'], 0, ',', '.')); ?></td>

                <td><?php echo e($item['user']['name']); ?></td>
                <td><?php echo e($item['created_at']->translatedFormat('d F Y')); ?></td>
                <td>
                    <a href="<?php echo e(route('kasir.order.download', $item['id'])); ?>" class="btn btn-secondary">Unduh (.pdf)</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <?php if($orders->count()): ?>
        <?php echo e($orders->links()); ?>

        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apotek-app\resources\views/order/kasir/index.blade.php ENDPATH**/ ?>