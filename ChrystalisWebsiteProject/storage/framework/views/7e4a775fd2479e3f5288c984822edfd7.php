

<?php $__env->startSection('title', 'Cart List'); ?>



<?php $__env->startSection('content'); ?>

<div class="col-sm-10">

    <!-- Ecartlist.blade.php -->

    <div class="trending-wrapper">

        <h4>Result for Products</h4>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="row searched-item">

            <div class="col-sm-3">

                <a href="detail/<?php echo e($item->id, false); ?>">

                    <img class="trending-image" src="<?php echo e($item->gallery, false); ?>">

                </a>

            </div>

            <div class="col-sm-3">

                <div>

                    <h2><?php echo e($item->name, false); ?></h2>

                    <h5><?php echo e($item->description, false); ?></h5>

                </div>

                <!-- Missing closing tag? Assuming it's meant to be </a> -->

            </div>

            <div class="col-sm-3">

                <a href="detail/<?php echo e($item->id, false); ?>">

                    <img class="trending-image" src="<?php echo e($item->gallery, false); ?>">

                    <div>

                        <h2><?php echo e($item->name, false); ?></h2>

                        <h5><?php echo e($item->description, false); ?></h5>

                    </div>

                </a>

            </div>

            <div class="col-sm-3">

                <button><!-- Button content here --></button>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/cartlist.blade.php ENDPATH**/ ?>