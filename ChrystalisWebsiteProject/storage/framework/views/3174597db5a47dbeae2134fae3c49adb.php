<?php $__env->startSection('title', 'Previous Orders'); ?>

<?php $__env->startSection('content'); ?>

    <hr class="mb-4">
 
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard'), false); ?>

        </h2>
     <?php $__env->endSlot(); ?>
 
    <!-- div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!"), false); ?>

                </div>
            </div>
        </div>
    </div-->
    <style>
       
                        a {
                            text-decoration: none;
                            transition: color 0.3s ease;
                            /* Making text larger on hover */
                        }

                        a:hover p {
                            font-size: 20px;
                        }

                        #bg {
                    background-image: url('<?php echo e(asset("Images/HomePage/login.jpg"), false); ?>');
                    background-size: 100%; /* make the image smaller */
                }
                 

            </style>

 
 
    <!-- Bootstrap icons -->
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--
  -->
 
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/dashboard.css'), false); ?>" />
 
    <!-----------------------------
      User Account
-------------------------------->


    <section style="background-color: #eee;" id="bg">
 
    <div class="container py-5">

    <div class="row">
   
      <div class="col-lg-4">
        <div class="card mb-4" style="border: 1px solid gold; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
          <div class="card-body text-center">
            <img src="<?php echo e(asset('Images\HomePage\pfp.png'), false); ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px; display: block; margin-left: auto; margin-right: auto;">
            <h5 class="my-3"><?php echo e(Auth::user()->name, false); ?></h5>
            <p class="text-muted mb-1"><?php echo e(Auth::user()->email, false); ?></p>

          </div>
        </div>

        <div class="card mb-4 mb-lg-0" style=" border-radius: 10px;">
          <div class="card-body p-0" style="border: 1px solid gold; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
            <ul class="list-group list-group-flush rounded">

            
            <a href="<?php echo e(route('previousOrders'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center pt-4">
                <i class="fas fa-history fa-lg text-dark"></i>
                
                <p class="mb-0">Order History</p>
              </li>
              </a>
              <hr>
              <a href="<?php echo e(route('cartlist'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <i class="fa fa-shopping-cart fa-lg" style="color: #333333;"></i>
                
                <p class="mb-0">Cart</p>
   
              </li>
              </a>
              <hr>
              <a href="<?php echo e(route('wishlist'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <i class="fa fa-star fa-lg" style="color: #55acee;"></i>
                
                <p class="mb-0">Wish List</p>
    
              </li>
              </a>
              <hr>
              <a href="<?php echo e(route('profile.edit'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center pb-4">
                <i class="fas fa-cog fa-lg text-secondary"></i>
                
                <p class="mb-0">Account Settings</p>
    
              </li>
              </a>
              
            </ul>
          </div>
        </div>



        <div class="card my-4 mb-lg-0">
          <div class="card-body p-0" style="border: 1px solid gold; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
            <ul class="list-group list-group-flush rounded-3">
            <form method="POST" action="<?php echo e(route('logout'), false); ?>">
                                    <?php echo csrf_field(); ?>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-sign-out-alt fa-lg text-danger"></i>
                                    <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                        <p class="mb-0">Log Out</p>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
              </li>
              </form>
            </ul>
          </div>
        </div>
      </div>



      <div class="col-lg-8">
        <div class="card mb-4" style="border: 1px solid gold; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e(Auth::user()->name, false); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo e(Auth::user()->email, false); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">*********</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">35 London Road, Kingstonbury, KT17 8BM</p>
              </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
              <a href="<?php echo e(route('profile.edit'), false); ?>" class="badge-light"><button type="button" class="btn btn-secondary ms-1">Edit Details</button></a>
            </div>

          </div>
        </div>


        <div class="row">
          <div class="col-md-6" >
            <div class="card mb-4 mb-md-0" style="border: 1px solid gold; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
              <div class="card-body">
                <p class="mb-4" style="font-size: 1.2rem; font-weight: 500"> Saved Payment Details
                <p class="mb-1" style="font-size: 1rem; font-weight: 500">Card Name: <?php echo e(Auth::user()->name, false); ?></p>
                
                <p class="mt-4 mb-1" style="font-size: .9rem;">Card Number: <span id="cardNumber">************</span></p>
                
                <p class="mt-4 mb-1" style="font-size: .9rem;">Card Expiry: <span id="expiryDate">**/**</span></p>
               
                <p class="mt-4 mb-1" style="font-size: .9rem;">CVC: <span id="cvc">***</span></p>
                
                <h5 style="padding-top: 10px; color: black">
                            <a href="#" class="styleless badge badge-secondary" id="showHideCardDetails">Show Card Details</a>
                        </h5>
                
               
                
                

              </div>
            </div>
          </div>

          <div class="col-md-6">
          <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0" style="border: 1px solid gold; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
            <ul class="list-group list-group-flush rounded-3">

            
            <a href="<?php echo e(route('aboutus'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center pt-4">
                <i class="fa fa-info-circle fa-lg text-warning"></i>
                
                <p class="mb-0">About Us</p>
    
              </li>
              </a>
              <hr>
              <a href="<?php echo e(route('contactus'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <i class="fas fa-id-card-alt fa-lg" style="color: #333333;"></i>
                
                <p class="mb-0">Contact Us</p>
   
              </li>
              </a>
              <hr>
              <a href="<?php echo e(route('privacy'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <i class="fas fa-file-contract fa-lg" style="color: #55acee;"></i>
                
                <p class="mb-0">Privacy Policy</p>
    
              </li>
              </a>

              <hr>
              <a href="<?php echo e(route('terms'), false); ?>">
              <li class="list-group-item d-flex justify-content-between align-items-center pb-4">
                <i class="fas fa-file-signature fa-lg" style="color: #55acee;"></i>
                
                <p class="mb-0">Terms and Conditions</p>
    
              </li>
              </a>
              
              
            </ul>
          </div>
        </div>
          </div>

          
          
        </div>

      </div>
    </div>
  </div>
</section>
 


 
    <script>
            const showHideButton = document.getElementById('showHideCardDetails');
            const cardNumber = document.getElementById('cardNumber');
            const expiryDate = document.getElementById('expiryDate');
            const cvc = document.getElementById('cvc');
            let isCardDetailsVisible = false;
 
            showHideButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default behavior for anchor tag
                event.stopPropagation(); // Stop event propagation to prevent unexpected side effects
               
                if (isCardDetailsVisible) {
                    // Hide card details
                    showHideButton.innerText = 'Show Card Details';
                    isCardDetailsVisible = false;
                    cardNumber.innerText = "************";
                    expiryDate.innerText = "**/**";
                    cvc.innerText = "***";
                } else {
                    // Show card details
                    showHideButton.innerText = 'Hide Card Details';
                    isCardDetailsVisible = true;
                    cardNumber.innerText = "4242 4242 4242 4242";
                    expiryDate.innerText = "12/34";
                    cvc.innerText = "567";
                }
            });
        </script>
 
 
 
 
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/dashboard.blade.php ENDPATH**/ ?>