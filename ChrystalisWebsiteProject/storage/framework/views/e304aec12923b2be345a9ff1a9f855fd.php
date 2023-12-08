<?php $__env->startSection('title', 'Ring'); ?>

<?php $__env->startSection('content'); ?>

<h1>Rings</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ring): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item <?php echo e($ring['id'] == 1 ? 'active' : '', false); ?>">
                <a href="detail/<?php echo e($ring['id'], false); ?>">
                    <img class="card-img-top" src="<?php echo e($ring['gallery'], false); ?>">
                    <div class="product-info">
                        <h3><?php echo e($ring->name, false); ?></h3>
                        <p><?php echo e($ring->description, false); ?></p>
                    </div>
                  </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/ring.blade.php ENDPATH**/ ?>