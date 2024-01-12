

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h2>Tambah Data Staff TU</h2>

        <div class="border p-5">
            <form method="post" action="<?php echo e(route('lettertype.store')); ?>">
                <?php echo csrf_field(); ?>

                <?php if(Session::get('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                <?php endif; ?>

                <?php if($errors->any()): ?>
                    <ul class="alert alert-danger p-3">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>

                <div class="mb-3 row">
                    <label for="letter_code" class="col-sm-2 col-form-label">Kode Surat:</label>
                    <div class="col-sm-10">
                        <input type="number" name="letter_code" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="name_type" class="col-sm-2 col-form-label">Klasifikasi Surat:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name_type" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-end">Simpan</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kelayakan\resources\views/lettertype/create.blade.php ENDPATH**/ ?>