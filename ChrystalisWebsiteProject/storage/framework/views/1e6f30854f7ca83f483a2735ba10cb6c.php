<?php $__env->startSection('title', 'Necklace'); ?>


<?php $__env->startSection('content'); ?>

<h1>Necklace</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $necklace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item <?php echo e($necklace['id'] == 1 ? 'active' : '', false); ?>">
                <a href="detail/<?php echo e($necklace['id'], false); ?>">
                    <img class="card-img-top" src="<?php echo e($necklace['gallery'], false); ?>">
                    <div class="product-info">
                        <h3><?php echo e($necklace->name, false); ?></h3>
                        <p><?php echo e($necklace->description, false); ?></p>
                    </div>
                  </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</main>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/necklace.blade.php ENDPATH**/ ?>