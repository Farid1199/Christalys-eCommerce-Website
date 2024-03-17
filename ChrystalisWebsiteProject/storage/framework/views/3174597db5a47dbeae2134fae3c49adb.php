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
 
 
    <div>
        <hr class="mb-3">
        <h2 class="text-center my-3 py-2"> Welcome to your Dashboard, <?php echo e(Auth::user()->name, false); ?>!
        </h2>
    </div>
 
    <main class="user-main">
        <section id="founders-profile">
            <div class="text-founder1">
                <ul>
                    <li>
 
                        <div class="founder-box4-skills">
                            <img src="<?php echo e(asset('Images\HomePage\user-pp.png'), false); ?>" alt="java-logo" class="lang-logos" />
                            <div>
                                <h3><?php echo e(Auth::user()->name, false); ?></h3>
                            </div>
 
                            <section class="user-links">
                                <a href="<?php echo e(route('previousOrders'), false); ?>">
                                    <h4>Order History</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="<?php echo e(route('cartlist'), false); ?>">
                                    <h4>Cart</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="<?php echo e(route('wishlist'), false); ?>">
                                    <h4>WishList</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="<?php echo e(route('profile.edit'), false); ?>" class="styleless">
                                    <h4><?php echo e(__('Account Settings'), false); ?></h4>
                                </a>
                            </section>
 
                            <section class="user-links">
 
                                <form method="POST" action="<?php echo e(route('logout'), false); ?>">
                                    <?php echo csrf_field(); ?>
 
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
                                        <h4><?php echo e(__('Log Out'), false); ?></h4>
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
                                </form>
 
 
                            </section>
                        </div>
                    </li>
 
                    <li>
                        <div class="founder-box4-skills">
                            <h3 style="padding-top: 10px">Info and Support</h3>
                            <section class="user-links">
                                <a href="<?php echo e(route('aboutus'), false); ?>" style="text-decoration:none;">
                                    <h4>About Us</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="<?php echo e(route('contactus'), false); ?>" style="text-decoration:none;">
                                    <h4>Contact Us</h4>
                                </a>
                            </section>
                        </div>
                    </li>
                </ul>
 
                <div class="founder-box2">
                    <h3>Account Details</h3>
 
                    <h4>Personal Details</h4>
                    <section class="user-links">
                        <p style="font-weight: 500"> Username: <b><?php echo e(Auth::user()->name, false); ?></b></p>
                        <p>Email: <b><?php echo e(Auth::user()->email, false); ?></b></p>
                        <p>Current Password:<b> *******</b></p>
                        <h5 style="padding: 15px; color: black">
                            <a href="<?php echo e(route('profile.edit'), false); ?>" class="styleless badge badge-light"> Edit Details </a>
    </h5>
                    </section>
 
                    <h4>Saved Addresses</h4>
                    <section class="user-links">
                        <p class="mt-2">Address Line: <b>35 London Road</b></p>
                        <p>City: <b>Kingstonbury</b></p>
                        <p class="mb-2">Postcode: <b>KT17 8BM</b></p>
                    </section>
 
                    <h4>Saved Payment Details</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Card Name: User5</p>
                        <p>Card Number: <span id="cardNumber">************</span></p>
                        <p>Expiry date: <span id="expiryDate">**/**</span></p>
                        <p>CVC: <span id="cvc">***</span></p>
                        <h5 style="padding: 15px; color: black">
                            <a href="#" class="styleless badge badge-light" id="showHideCardDetails">Show Card Details</a>
    </h5>
                    </section>
                </div>
            </div>
        </section>
    </main>
 
 
 
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