<?php $__env->startSection('title', 'rings'); ?>


<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/style.css'), false); ?>" />


<!--<div class="container">
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



<section id="product-details" class="container mt-4">
    <!-- Product 1 -->
    <div class="seperate Watches">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.michaeljonesjeweller.co.uk/cdn/shop/products/WBP1112.FT6199_1296x.jpg?v=1681821780"
                        alt="Watch 1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.robertgatwardjewellers.co.uk/cdn/shop/products/wbp1112-ft6199-thumb.jpg?crop=center&height=2048&v=1678193792&width=1200"
                        alt="Watch 2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.robertgatwardjewellers.co.uk/cdn/shop/products/wbp1112-ft6199-thumb4.jpg?crop=center&height=2048&v=1678193792&width=1200"
                        alt="Watch 3" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.robertgatwardjewellers.co.uk/cdn/shop/products/wbp1112-ft6199-thumb3.jpg?crop=center&height=2048&v=1678193792&width=1200"
                        alt="Watch 4" class="d-block w-100">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="watchesSeperate">
            <h2>TAG HEUER Aquaracer Professional 40mm 200m Solargraph Quartz Watch WBP1112.FT6199</h2>
            <p>The TAG Heuer Aquaracer Professional 200 Solargraph is a new take on a watch made for the outdoors. The
                first-ever solar-powered TAG Heuer integrates the innovative Solargraph module to harness the sun’s
                limitless energy. </p>
            <p><b>Key Features:</b></p>
            <ul>
                <li>Solar-powered with Solargraph module</li>
                <li>Calibre TH50-00 technology</li>
                <li>No battery change needed</li>
                <li>Carbon-fused bezel inserts</li>
                <li>Luminous material for day and night legibility</li>
                <li>Water resistance: 200m</li>
            </ul>
            <p><b>Price: £2,700.00</b></p>

            <button class="btn btn-success" id="addToCartBtn">Add to Cart</button>
        </div>
    </div>



</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/DetailCheck.blade.php ENDPATH**/ ?>