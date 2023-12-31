

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('auth-login')); ?>" method="POST" class="card p-4 mt-5">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
            <ul class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
        
        <?php if(Session::get('failed')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('failed')); ?></div>
        <?php endif; ?>
        <div class="mb-3 mx-1">
            <label for="email" class="form-label col 2">Email</label>
            <input type="email" name="email" id="email" class="form-control col-10" placeholder="Masukkan Email Anda">
        </div>
        <div class="mb-3 mx-1">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project-laravel\apotek-app\resources\views/login.blade.php ENDPATH**/ ?>