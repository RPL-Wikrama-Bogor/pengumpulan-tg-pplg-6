

<?php $__env->startSection('content'); ?>
    <div class="mb-2">
        <h4>Data Guru</h4>
        <a href="}">Home</a>
        /
        <a href="<?php echo e(route('lettertype.index')); ?>">Data Klasifikasi Surat</a>
    </div>

    <?php if(Session::get('success')): ?>
        <div class="alert alert-success"> <?php echo e(Session::get('success')); ?></div>       
    <?php endif; ?>
    <?php if(Session::get('deleted')): ?>
        <div class="alert alert-danger"> <?php echo e(Session::get('deleted')); ?></div>   
    <?php endif; ?>
    
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <a href="<?php echo e(route('lettertype.create')); ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Surat</th>
                <th>Klasifikasi Surat</th>
                <th>Surat Tertaut</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $lettertypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($item['letter_code']); ?></td>
                    <td><?php echo e($item['name_type']); ?></td>
                    <td></td>
                    <td>
                        <a href="<?php echo e(route('lettertype.edit', $item->id)); ?>" class="btn btn-secondary me-3">Edit</a>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo e($item->id); ?>">
                    Hapus
                </button>
            </td>
        </tr>
            <div class="modal fade" id="exampleModal-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pengelola Surat</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Anda yakin akan menghapus Data?
                        </div>
                        <div class="modal-footer">
                            <form action="<?php echo e(route ('lettertype.delete', $item['id'])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-dark">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kelayakan\resources\views/lettertype/index.blade.php ENDPATH**/ ?>