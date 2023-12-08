<?php $__env->startSection('title', 'Ring Detail'); ?>


<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="container">
        <div class="row">
            <div>
                <img class="card-img-top" src="<?php echo e(asset($product['gallery']), false); ?>" alt="">
            </div>

            <div class="col-sm-6">
                <h2><?php echo e($product['name'], false); ?></h2>
                <h3>Price: <?php echo e($product['price'], false); ?></h3>
                <p>Details: <?php echo e($product['description'], false); ?></p>
                <h6>Category: <?php echo e($product['category'], false); ?></h5>

                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_id" value="<?php echo e($product['id'], false); ?>">

                        <button>Add to Cart</button>
                    </form>

                    <br><br>
                    <button>Buy Now</button>
                    <br><br>
                    <!-- Add more details as needed -->
            </div>
        </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/ProductDetail.blade.php ENDPATH**/ ?>