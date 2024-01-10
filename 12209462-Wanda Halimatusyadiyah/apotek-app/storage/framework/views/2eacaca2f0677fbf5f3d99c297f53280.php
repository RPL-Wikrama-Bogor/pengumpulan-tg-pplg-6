

<?php $__env->startSection('content'); ?>
<div class="my-5 d-flex justify-content-end">
    <a href="<?php echo e(route('order.export-excel')); ?>" class="btn btn-primary">Export Data (.excel)</a>
</div>
<table class="table table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Pembeli</th>
            <th>Obat</th>
            <th>Kasir</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1); ?></td>
            <td><?php echo e($order->name_customer); ?></td>
            <td>
                <ol>
                    <?php $__currentLoopData = $order['medicines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>

                        <?php echo e($medicine['name_medicine']); ?>

                        ( Rp. <?php echo e(number_format($medicine['price'], 0, ',', '.')); ?> ):
                        Rp. <?php echo e(number_format($medicine['sub_price'], 0, ',', '.')); ?>

                        <small>qty <?php echo e($medicine['qty']); ?></small>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </td>
            <td><?php echo e($order['user']['name']); ?></td>

            <?php
                setlocale(LC_ALL, 'IND');
            ?>

            <td><?php echo e(Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y')); ?></td>
            <td> <a href="<?php echo e(route('kasir.order.download', $order['id'])); ?>" class="btn btn-secondary">Unduh (.pdf)</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apotek-app\resources\views/order/admin/index.blade.php ENDPATH**/ ?>