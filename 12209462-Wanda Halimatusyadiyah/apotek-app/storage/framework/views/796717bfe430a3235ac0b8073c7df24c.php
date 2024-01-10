

 <?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('akun.store')); ?>" method="POST" class="card p-5">
        <?php echo csrf_field(); ?> 
        
        <?php if(Session::get('success')): ?>
            <div class="alert alert-success"> <?php echo e(Session::get('success')); ?></div>
        <?php endif; ?>
            <?php if($errors->any()): ?>
            <ul class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email :</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="name" name="email">
    </div>
    </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tipe pengguna :</label>
            <div class="col-sm-10">
            <select class="form-select" id="type" name="type">
                <option selected disabled hidden>Pilih</option>
                <option value="admin">admin</option>
                <option value="cashier">kasir</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan data</button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apotek-app\resources\views/akun/create.blade.php ENDPATH**/ ?>