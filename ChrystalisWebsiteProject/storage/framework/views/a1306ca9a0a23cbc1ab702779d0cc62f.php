<?php $__env->startSection('title', 'Watch'); ?>


<?php $__env->startSection('content'); ?>

<h1>Watches</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $watch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item <?php echo e($watch['id'] == 1 ? 'active' : '', false); ?>">
                <a href="detail/<?php echo e($watch['id'], false); ?>">
                    <img class="card-img-top" src="<?php echo e($watch['gallery'], false); ?>">
                    <div class="product-info">
                        <h3><?php echo e($watch->name, false); ?></h3>
                        <p><?php echo e($watch->description, false); ?></p>
                    </div>
                  </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</main>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/watch.blade.php ENDPATH**/ ?>