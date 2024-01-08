


<?php $__env->startSection('content'); ?>
    <div class="jumbotron p-4 bg-light mt-5">
        <div class="container">
            <?php if(Session::get('failed')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('failed')); ?></div>
            <?php endif; ?>
            <h1 class="display-4">Apotek App</h1>
            
            <h5>Selamat Datang, <?php echo e(Auth::user()->name); ?></h5>
            <p class="lead">Aplikasi manajemen untuk pekerja Administrator Apotek. Digunakan untuk Admin logistik dan Kasir.</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project-laravel\apotek-app\resources\views/dashboard.blade.php ENDPATH**/ ?>