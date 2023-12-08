<?php $__env->startSection('title', 'Earring'); ?>



<?php $__env->startSection('content'); ?>

<h1>Earring</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $earring): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item <?php echo e($earring['id'] == 1 ? 'active' : '', false); ?>">
                <a href="detail/<?php echo e($earring['id'], false); ?>">
                    <img class="card-img-top" src="<?php echo e($earring['gallery'], false); ?>">
                    <div class="product-info">
                        <h3><?php echo e($earring->name, false); ?></h3>
                        <p><?php echo e($earring->description, false); ?></p>
                    </div>
                  </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</main>

<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/earring.blade.php ENDPATH**/ ?>