

<?php $__env->startSection('title', 'Full Catalogue'); ?>



<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/style.css'), false); ?>" />

<!-----------------------------
    MAIN CONTENT
-------------------------------->

<div class="album bg-light py-5">
    <div class="container py-5">

        <div class="py-3 text-center"></div>
        <div class="col">

            <div class="row">

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bracelet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card mb-4 box-shadow item<?php echo e($bracelet['id'] == 1 ? 'active' : '', false); ?>">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-fluid img-responsive" src="<?php echo e($bracelet['gallery'], false); ?>"
                                style="/*width: 70%; height: 70%;*/" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3"><?php echo e($bracelet->name, false); ?></h4>
                                <p class="card-text">
                                    <?php echo e($bracelet->description, false); ?>

                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: <?php echo e($bracelet->price, false); ?>

                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="detail/<?php echo e($bracelet['id'], false); ?>"><button type="button"
                                            class="btn btn-medium btn-outline-primary">
                                            View
                                        </button></a>

                                    <form action="/add_to_cart" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($bracelet['id'], false); ?>">
                                        <button class="btn btn-success" id="addToCartBtn"> Add to Cart </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>
</div>


<!-- <h1>Bracelet</h1>
<main>
    Ring 1 
    <section class="product-container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bracelet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item <?php echo e($bracelet['id'] == 1 ? 'active' : '', false); ?>">
                <a href="detail/<?php echo e($bracelet['id'], false); ?>">
                    <img class="card-img-top" src="<?php echo e($bracelet['gallery'], false); ?>">
                    <div class="product-info">
                        <h3><?php echo e($bracelet->name, false); ?></h3>
                        <p><?php echo e($bracelet->description, false); ?></p>
                    </div>
                  </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</main> 






-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/searchProducts.blade.php ENDPATH**/ ?>