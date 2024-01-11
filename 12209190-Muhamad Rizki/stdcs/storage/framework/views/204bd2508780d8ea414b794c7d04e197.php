

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
          <main class="content px-3 py-2" style="background-color: rgba(34, 46, 60, .05)">
               <?php if(Session::get('cantAccess')): ?>
               <div class="alert alert-danger"><?php echo e(Session::get('cantAccess')); ?></div>
           <?php endif; ?>
               <div class="container-fluid">
               <div class="mb-3">
                <h4><a class="link-opacity-10" href="#" style="color: white">Home</a></h4>
               </div>
               <div class="row" style="color : black">
                    <div class="container px-4 ">
                         <div class="row g-3 my-2 mb-4">
                              <div class="col-md-8">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">1</h3>
                                        <p class="fs-5">Surat keluar</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-4">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">1</h3>
                                        <p class="fs-5">Klasifikasi Surat</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>
            
                              <div class="col-md-4">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">1</h3>
                                        <p class="fs-5">Staff Tata Usaha</p>
                                   </div>
                                   <i class="ri-bookmark-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-8">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">2</h3>
                                        <p class="fs-5">guru</p>
                                   </div>
                                   <i class="ri-bookmark-fill fs-1"></i>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               </div>
          </main>
           
          <footer class="footer">
               <div class="container-fluid">
               <div class="row text-muted">
                    <div class="col-6 text-start">
                    </div>
               </div>
               </div>
          </footer>
        
      <script src="<?php echo e(asset('js/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengumpulan-tg-pplg-6\12209190-Muhamad Rizki\stdcs\resources\views/home.blade.php ENDPATH**/ ?>