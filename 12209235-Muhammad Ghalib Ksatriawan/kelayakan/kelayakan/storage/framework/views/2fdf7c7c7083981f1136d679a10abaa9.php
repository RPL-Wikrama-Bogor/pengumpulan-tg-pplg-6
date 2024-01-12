

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
          
               <div class="container-fluid">
                    <div class="mb-2">
                         <h4 class="fw-bold">Dashboard</h4>
                         <a href="/" class="list-group-item-action disabled" tabindex="-1" aria-disabled="true">Home</a>
                         /
                         <a href="/" class="list-group-item-action disabled" tabindex="-1" aria-disabled="true">Dashboard</a>
                     </div>
                    <div class="row">
                         <div class="container px-2 ">
                              <div class="row g-3 my-2 mb-3">
                                   <div class="col-md-7">
                                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                             <h3 class="fs-2">6</h3>
                                             <p class="fs-5">Surat Keluar</p>
                                        </div>
                                        <i class="ri-bookmark-fill fs-1"></i>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                             <h3 class="fs-2"><?php echo e($lettertypeCount); ?></h3>
                                             <p class="fs-5">Klasifikasi Surat</p>
                                        </div>
                                        <i class="ri-bookmark-fill fs-1"></i>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                             <h3 class="fs-2"><?php echo e($guruCount); ?></h3>
                                             <p class="fs-5">Guru</p>
                                        </div>
                                        <i class="ri-user-fill fs-1"></i>
                                        </div>
                                   </div>

                                   <div class="col-md-7">
                                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                        <div>
                                             <h3 class="fs-2"><?php echo e($staffCount); ?></h3>
                                             <p class="fs-5">Staff Tata Usaha</p>
                                        </div>
                                        <i class="ri-user-fill fs-1"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </main>
        
      <script src="<?php echo e(asset('js/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kelayakan\resources\views/dashboard/index.blade.php ENDPATH**/ ?>