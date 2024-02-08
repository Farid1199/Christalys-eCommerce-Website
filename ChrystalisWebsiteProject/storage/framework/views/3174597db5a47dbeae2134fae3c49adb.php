<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        <h2 class="text-center my-3 py-3"> Welcome to your Dashboard, <?php echo e(Auth::user()->name, false); ?>!
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
                                <a href="<?php echo e(route('previousod'), false); ?>">
                                    <h4>Order History</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="<?php echo e(route('cartlist'), false); ?>">
                                    <h4>Cart</h4>
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
                            <h3 style="padding-top: 10px">Help and Support</h3>
                            <section class="user-links">
                                <a href="<?php echo e(route('contactus'), false); ?>" style="text-decoration:none;">
                                    <h4>Customer Support</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="<?php echo e(route('contactus'), false); ?>" style="text-decoration:none;">
                                    <h4>Digital Service Support</h4>
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
                        <p style="font-weight: 500">Your Name</p>
                        <p>DOB: XX/XX/XX</p>
                        <p>Email: sampleemail@email.com</p>
                        <p>Phone: +44 XXXX XXX XXX</p>
                        <p>Current Password: *******</p>
                        <p style="padding: 15px; color: black">
                            <a href="#" class="styleless"> Edit Details </a>
                        </p>
                    </section>

                    <h4>Saved Addresses</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Your Name</p>
                        <p>35 London Road, KINGSTON UPON THAMES, KT17 8BM</p>
                        <p>United Kingdom</p>
                        <p>Phone: +44 XXXX XXX XXX</p>
                        <p style="padding: 15px; color: black">
                            <a href="#" class="styleless"> Edit </a><a href="#" class="styleless"> | Remove </a>
                        </p>
                    </section>

                    <section class="user-links">
                        <p style="padding-bottom: 5px">
                            <a href="#" class="styleless"> Add New Address </a>
                        </p>
                    </section>

                    <h4>Saved Payment Details</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Card Name: Your Name</p>
                        <p>Visa Debit ending in XXXX</p>
                        <p style="padding: 15px; color: black">
                            <a href="#" class="styleless"> Edit </a><a href="#" class="styleless"> | Remove </a>
                        </p>
                    </section>
                    <section class="user-links">
                        <p style="padding-bottom: 5px">
                            <a href="#" class="styleless"> Add New Payment Option </a>
                        </p>
                    </section>

                    <h4>Gift Cards and Vouchers</h4>
                    <section class="user-links">
                        <p style="font-weight: 500; padding-bottom: 5px">
                            Your Balance: £0.00
                        </p>
                    </section>
                    <section class="user-links">
                        <p style="padding-bottom: 5px">
                            <a href="#" class="styleless"> Add New Gift Card/Voucher </a>
                        </p>
                    </section>
                </div>
            </div>
        </section>
    </main>








 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/dashboard.blade.php ENDPATH**/ ?>