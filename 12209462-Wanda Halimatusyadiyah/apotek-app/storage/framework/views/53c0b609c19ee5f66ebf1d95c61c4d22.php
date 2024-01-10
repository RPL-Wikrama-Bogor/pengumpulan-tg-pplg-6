

<?php $__env->startSection('content'); ?>

<?php if(Session::get('success')): ?>
    <div class="alert alert-success"> <?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
<?php if(Session::get('deleted')): ?>
<div class="alert alert-warning"> <?php echo e(Session::get('deleted')); ?></div>
    <?php endif; ?>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <a href="<?php echo e(route('akun.create')); ?>" type= "submit" class= "btn " style="background-color:#7D7C7C; margin-left:955px; margin-bottom:10px; color:white; margin-top:30px">Tambah Pengguna</a>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($item['name']); ?></td>
                <td><?php echo e($item['email']); ?></td>
                <td><?php echo e($item['role']); ?></td>
                <td class="d-flex justify-content-center">
                    <a href="<?php echo e(route('akun.edit', $item['id'])); ?>" class="btn btn-primary me-3">Edit</a>
                    
                        <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo e($item->id); ?>">
                            Hapus
                          </button>
                    </td>
                </tr>

                <!-- Button trigger modal -->
    
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <form action="<?php echo e(route('akun.delete', $item->id)); ?>" method="POST"> 
                  
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </form>
              <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apotek-app\resources\views/akun/index.blade.php ENDPATH**/ ?>