<?php $__env->startSection('title', 'Product Catalogue'); ?>



<?php $__env->startSection('content'); ?>


<main class="container mt-5">
  <h2>Product Catalogue</h2>

  <!-- Product 1: Ring and Product 2: Necklace -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="<?php echo e(asset('Images\CatalogueImg\gold-rings-.png'), false); ?>" class="card-img-top" alt="Ring" />
        <div class="card-body">
          <h5 class="card-title">Ring</h5>
          <p class="card-text">Description of the ring product.</p>
          <a href="rings" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-4">
        <img src="<?php echo e(asset('Images\CatalogueImg\Neckless1.jpeg'), false); ?>" class="card-img-top" alt="Necklace" />
        <div class="card-body">
          <h5 class="card-title">Necklace</h5>
          <p class="card-text">Description of the necklace product.</p>
          <a href="necklaces" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Product 3: Bracelet and Product 4: Earrings -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="<?php echo e(asset('Images\CatalogueImg\bracelet - 2.jpg'), false); ?>" class="card-img-top" alt="Bracelet" />
        <div class="card-body">
          <h5 class="card-title">Bracelet</h5>
          <p class="card-text">Description of the bracelet product.</p>
          <a href="bracelets" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-4">
        <img src="<?php echo e(asset('Images\CatalogueImg\earrings - 1.jpg'), false); ?>" class="card-img-top" alt="Earrings" />
        <div class="card-body">
          <h5 class="card-title">Earrings</h5>
          <p class="card-text">Description of the earrings product.</p>
          <a href="<?php echo e(route('earrings'), false); ?>" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Product 5: Watches -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="<?php echo e(asset('Images\CatalogueImg\Watch-1.jpg'), false); ?>" class="card-img-top" alt="Watches" />
        <div class="card-body">
          <h5 class="card-title">Watches</h5>
          <p class="card-text">Description of the watches product.</p>
          <a href="<?php echo e(route('watches'), false); ?>" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

</main>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/productCatalogue.blade.php ENDPATH**/ ?>