<?php $__env->startSection('title', 'Product Detail'); ?>


<?php $__env->startSection('content'); ?>

<!--
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
                     Add more details as needed 
            </div>
        </div>
    </div> -->



    <link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/contactus.css'), false); ?>" />


    <hr class="my-5" />
    
    <section id="product-details" class="container my-4" style="padding-top:20px;">
        <!-- Product 1 -->
        <div class="seperate Watches">
            <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner" style="width:100%; height:100%;">
                    <div class="carousel-item active">
                        <img src="<?php echo e(asset($product['gallery']), false); ?>"
                             class="img-fluid img-thumbnail w-70 h-70">
                    </div>
                </div>            
            </div>
            <div class="watchesSeperate">
                <div class="row align-items-center">
                    <h2><?php echo e($product['name'], false); ?></h2>
                    <p><?php echo e($product['description'], false); ?> </p>
                    <p>Category: <?php echo e($product['category'], false); ?> </p>
        
                    <p><b>Price: <?php echo e($product['price'], false); ?></b></p>
                </div>
    
                <div class="d-flex justify-content-between">
                    <form action="/add_to_cart" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_id" value="<?php echo e($product['id'], false); ?>">
                        <button class="btn btn-success" id="addToCartBtn">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    
    
    
    </section>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/ProductDetail.blade.php ENDPATH**/ ?>