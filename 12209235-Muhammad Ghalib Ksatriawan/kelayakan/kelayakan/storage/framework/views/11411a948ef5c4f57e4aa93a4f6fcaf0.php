<?php $__env->startSection('content'); ?>
    
    <h2>Data Guru</h2>
    <a href="/" class="list-group-item-action disable" tabindex="-1" aria-disabled="true">Home</a>
    /
    <a href="<?php echo e(route('guru.index')); ?>" class="list-group-item-action disable" tabindex="-1" aria-disabled="true">Data
        Staff</a>


        <?php if(Session::get('success')): ?>
            <div class="alert alert-success"> <?php echo e(Session::get('success')); ?></div>       
        <?php endif; ?>
        <?php if(Session::get('deleted')): ?>
            <div class="alert alert-danger"> <?php echo e(Session::get('deleted')); ?></div>   
        <?php endif; ?>
    

    <div>
        <div class="mb-3">
            <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-secondary mt-5 ">Tambah Pengguna</a>
        </div>

        <div class="input-group mb-3">
            <div class="d-flex justify-content-start">
                <input type="text" name="cari" class="form-control">
                <button class="btn btn-primary"><i class="bi bi-search"></i>Cari</button>
            </div>
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->role); ?></td>
                        <td class="d-flex">
                        <a href="<?php echo e(route('guru.edit', $user->id)); ?>" class="btn btn-secondary me-3">Edit</a>
                            
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo e($user->id); ?>">
                            Hapus
                        </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="exampleModal-<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <form action="<?php echo e(route ('guru.delete', $user['id'])); ?>" method="POST">
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
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form tambah data user di sini -->
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role">
                        </div>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kelayakan\resources\views/guru/index.blade.php ENDPATH**/ ?>