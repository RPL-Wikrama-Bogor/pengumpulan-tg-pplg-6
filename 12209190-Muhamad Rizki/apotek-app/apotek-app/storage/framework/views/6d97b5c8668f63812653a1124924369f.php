    

    <?php $__env->startSection('content'); ?>
    <div class="mt-5">
        <form action="<?php echo e(route('order.search')); ?>" method="GET" class="card bg-light mt-5 p-5">
            <div class="d-flex justify-content-end">
                <a href="<?php echo e(route('order.create')); ?>" class="btn btn-secondary"><i class="bi bi-cart-plus"></i> Tambah Pembelian</a>
            </div>
            <div class="d-flex justify-content-start">
                <input type="date" style="width: 30%;" name="search" class="form-control">
                <button class="btn btn-primary"><i class="bi bi-search"></i>Cari</button>
                <a href="<?php echo e(route('order.index')); ?>" class="btn btn-secondary" style="margin-left: 5px;">Reset</a>
            </div>
            <table class="table mt-5 table-striped table-bordered table-hovered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Pembelian</th>
                    <th>Pesanan</th>
                    <th>Total Harga</th>
                    <th>Penanggung Jawab</th>
                    <th>Taggal Memesan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        
                    <td><?php echo e(($orders->currentPage()-1) * $orders->perpage() + $loop->index + 1); ?></td>
                    <td><?php echo e($order['name_customer']); ?></td>
                    <td>
                        <ol>
                            <?php $__currentLoopData = $order['medicines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($medicine['name_medicine']); ?> <small>Rp. <?php echo e(number_format($medicine['price'], 0, '.'.',')); ?> <b>(qty : <?php echo e($medicine['qty']); ?>)</b></small> = Rp. <?php echo e(number_format($medicine['price_after_qty'],0,'.'.',')); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    </td>
                    <?php
                    $ppn = $order['total_price'] * 0.1;
                    ?>
                    <td>Rp. <?php echo e(number_format(($order['total_price']+$ppn),0,'.'.',')); ?></td>
                    
                    <td><?php echo e($order['user']['name']); ?> <a href="mailto:kasir@gmail.com"><?php echo e($order['user']['email']); ?></a></td>
                    <?php
                    setLocale(LC_ALL, 'IND')
                    ?>
                    <td><?php echo e(Carbon\Carbon::parse($order['created_at'])->formatLocalized('%d %B %Y')); ?></td>
                    <td>
                        <a href="<?php echo e(route('order.download-pdf', $order['id'])); ?>" class="btn btn-success"><i class="bi bi-download"></i></a>
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
        </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project-laravel\apotek-app\resources\views/order/kasir/index.blade.php ENDPATH**/ ?>