<?php $__env->startSection('title', 'Ring'); ?>

<?php $__env->startSection('content'); ?>


<!-----------------------------
    MAIN CONTENT
-------------------------------->

<h1>Rings</h1>
<main>
    <-- Ring 1 <section class="product-container">
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




<!-- 


<link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/style.css'), false); ?>" />

<div class="album py-5 bg-light">
    <div class="container py-5">

        <div class="py-3 text-center"></div>
        <div class="row">

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <h4 class="text-center my-3">Product Title</h4>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">

                            <button type="button" class="btn btn-medium btn-outline-primary">
                                View
                            </button>

                            <button type="button" class="btn btn-medium btn-outline-success">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <h4 class="text-center my-3">Product Title</h4>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">

                            <button type="button" class="btn btn-medium btn-outline-primary">
                                View
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
</div> -->


<!--

            <div class="col-md-4 item <?php echo e($ring['id'] == 1 ? 'active' : '', false); ?>">
                <div class="card mb-4 box-shadow">
                    <h4 class="text-center my-3"><?php echo e($ring->name, false); ?></h4>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">
                            <?php echo e($ring->description, false); ?>

                        </p>
                        <div class="d-flex justify-content-between align-items-center">

                            <a href="detail/<?php echo e($ring['id'], false); ?>">
                                <button type="button" class="btn btn-medium btn-outline-primary">
                                    View
                                </button> </a>

                            <button type="button" class="btn btn-medium btn-outline-success">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

-->
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/ring.blade.php ENDPATH**/ ?>