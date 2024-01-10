

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('order.store')); ?>" method="POST" class="card p-4 mt-5">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
            <ul class="alert alert-danger">
                <?php $__currentLoopData = errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            
        <?php endif; ?>
        <div class="mb-3 d-flex align-items-center">
            <label for="name_customer" class="form-label" style="width: 16%">Penanggung Jawab :</label>
            <p style="width: 84%; margin-top:10px"  ><b><?php echo e(Auth::user()->name); ?></b></p>
        </div>
        <div class="mb-3 d-flex align-items-center">
            <label for="name_customer" class="form-label" style="width: 12%">Nama Pembeli :</label>
            <input type="text" name="name_customer" id="name_customer" class="form-control" style="width: 88%">
        </div>
        <div class="mb-3">
            <div class=" d-flex align-items-center mb-3">
            <label for="medicines" class="form-label" style="width: 12%">Obat :</label>
            
            <select name="medicines[]" id="medicines" class="form-control" style="width: 88%">
                <option selected hidden disabled>Pesanan 1</option>
                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($medicine['id']); ?>"><?php echo e($medicine['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
            
            <div id="wrap-select"></div>
            <p class="text-primary" style="margin-left: 12%; margin-top:15px; cursor:pointer;" onclick="addSelect()"><i class="bi bi-cart-plus"></i>Tambah Pesanan</p>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        let no = 2;
        function addSelect() {
            let el = `<div class="mb-3 d-flex align-items-center mb-3">
            <label for="medicines" class="form-label" style="width: 12%"></label>
            <select name="medicines[]" id="medicines" class="form-control" style="width: 88%">
                <option selected hidden disabled>Pesanan ${no}</option>
                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($medicine['id']); ?>"><?php echo e($medicine['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>`;
        // gunakan JQuery untuk memanggil html tempat el baru akan ditambahkan
        // append : menambahkan html dibagian bawah sebelum penutup tag terkait
        // menggunakan # karena wrap-select di html nya diisi dibagian id
        $("#wrap-select").append(el);
        // agar no pesanan berubah sesuai jumlah select
        no++;
        }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project-laravel\apotek-app\resources\views/order/kasir/create.blade.php ENDPATH**/ ?>