<?php $__env->startSection('title', 'Watch'); ?>



<?php $__env->startSection('content'); ?>

    <!-----------------------------
      LOGIN Section
-------------------------------->

    <main class="main-selection">
      <div class="button-container">
        <a href="<?php echo e(route('login'), false); ?>" class="styled-button">Log In as User</a>
        <a href="admin-login.html" class="styled-button">Log In as Admin</a>
      </div>
    </main>

    <!-----------------------------
      LAST SECTION  
-------------------------------->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/loginUserAdmin.blade.php ENDPATH**/ ?>