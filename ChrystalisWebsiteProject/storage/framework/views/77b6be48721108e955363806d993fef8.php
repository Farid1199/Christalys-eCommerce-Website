<?php $__env->startSection('title', 'Cart List'); ?>



<?php $__env->startSection('content'); ?>

<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>

<div class="container py-5">
  <div class="py-5 text-center"></div>



  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill"><?php echo e($total, false); ?></span>
      </h4>
      <ul class="list-group mb-3">

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li class="list-group-item d-flex justify-content-between lh-condensed">


          <div>
            <a href="detail/<?php echo e($item->id, false); ?>" style="text-decoration:none;">
              <h6 class="my-0"><?php echo e($item->name, false); ?></h6>
            </a>
          </div>
          <span class="text-muted"><?php echo e($item->price, false); ?></span>
        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <li class="list-group-item d-flex justify-content-between lh-condensed">

        </li>

      </ul>

    </div>

    <?php
    $index = 0; // Initialize an index variable
    ?>



    <div class="col-md-8 order-md-1">
      <h2 class="mb-3">Shopping Cart</h2>

      <?php if($products->isEmpty()): ?>
      <h4 class="text-center my-3">Your cart is empty</h4>
      <?php else: ?>




      <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card rounded-3 mb-4">

          <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">



                <img src="<?php echo e($item->gallery, false); ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <a href="detail/<?php echo e($item->id, false); ?>" style="text-decoration:none;">
                  <p class="lead fw-normal mb-2"><?php echo e($item->name, false); ?></p>
                </a>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0"><?php echo e($item->price, false); ?></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <!--a href="<?php echo e(url('removeCart', ['id' => $remove[$index]->id]), false); ?>">
                  <img src="<?php echo e(asset('Images\HomePage\cart-remove.png'), false); ?>" class="img-fluid">
                </a-->


                <form action="<?php echo e(route('cart.remove', ['id' => $item->cart_id]), false); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>

                  <button type="submit" class="btn-danger" style="  border: none;
                  cursor: pointer;
                  appearance: none;
                  background-color: inherit;
                  margin: 0;
                  padding: 0;">
                    <img type="submit" src="<?php echo e(asset('Images\HomePage\cart-remove.png'), false); ?>" class="img-fluid"></button>
                </form>
              </div>


            </div>
          </div>

        </div>

        <?php
        $index++; // Increment the index for the next iteration
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>


      <div class="row">

        <a href="<?php echo e(route('checkout'), false); ?>"><button type="button" class="btn btn-primary btn-block btn-lg">Proceed to
            Checkout</button></a>

      </div>

      <?php endif; ?>

    </div>




  </div>



</div>







<?php $__env->stopSection(); ?>






























<!--

=================================================================
              Bellow not needed
    -- =================================================================--

Previous CODE --




<div class="col-sm-10">

    Ecartlist.blade.php 

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

                Missing closing tag? Assuming it's meant to be </a> 

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

               <button> Button content here </button>

           </div>

       </div>

       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </div>

</div>


-->
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/cartlist.blade.php ENDPATH**/ ?>