<?php $__env->startSection('title', 'Bracelets'); ?>



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
                <div class="card mb-4 box-shadow">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-thumbnail img-responsive"
                                src="<?php echo e(asset('Images\CatalogueImg\gold-rings-.png'), false); ?>"
                                style="/*width: 70%; height: 70%;*/" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">Product Title</h4>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: £30
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="<?php echo e(route('t2detail'), false); ?>"><button type="button"
                                            class="btn btn-medium btn-outline-primary">
                                            View
                                        </button></a>

                                    <button type="button" class="btn btn-medium btn-outline-secondary">
                                        Add to Wishlist ♥️
                                    </button>

                                    <button type="button" class="btn btn-medium btn-outline-success">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card mb-4 box-shadow">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-thumbnail img-responsive"
                                src="<?php echo e(asset('Images\CatalogueImg\Watch-1.jpg'), false); ?>" style="width: 80%; height: 100%;"
                                alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">Product Title</h4>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: £30
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="<?php echo e(route('t2detail'), false); ?>"><button type="button"
                                            class="btn btn-medium btn-outline-primary">
                                            View
                                        </button></a>

                                    <button type="button" class="btn btn-medium btn-outline-secondary">
                                        Add to Wishlist ♥️
                                    </button>

                                    <button type="button" class="btn btn-medium btn-outline-success">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
</main> -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/bracelet.blade.php ENDPATH**/ ?>