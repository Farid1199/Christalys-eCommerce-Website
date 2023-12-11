<?php $__env->startSection('title', 'Bracelets'); ?>



<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/dashboard.css'), false); ?>" />

<!-----------------------------
      User Account
-------------------------------->

<main class="user-main">
    <section id="founders-profile">
        <div class="text-founder1">
            <ul>
                <li>
                    <div class="founder-box4-skills">
                        <img src="img/user-pp.png" alt="java-logo" class="lang-logos" />
                        <h3>Account Name</h3>
                        <section class="user-links">
                            <h4>My Details</h4>
                        </section>
                        <section class="user-links">
                            <h4>Order History</h4>
                        </section>
                        <section class="user-links">
                            <h4>Cart & Wishlist</h4>
                        </section>
                        <section class="user-links">
                            <h4>Account Settings</h4>
                        </section>
                        <section class="user-links">
                            <a href="login.html" class="styleless">
                                <h4>Log Out</h4>
                            </a>
                        </section>
                    </div>
                </li>

                <li>
                    <div class="founder-box4-skills">
                        <h3 style="padding-top: 10px">Help and Support</h3>
                        <section class="user-links">
                            <h4>Customer Support</h4>
                        </section>
                        <section class="user-links">
                            <h4>Digital Service Support</h4>
                        </section>
                        <section class="user-links">
                            <h4>Contact Us</h4>
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












<!--x-app-layout>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard'), false); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!"), false); ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>

<?php if (isset($__attributesOriginal)): ?>
<?php $attributes = $__attributesOriginal; ?>
<?php unset($__attributesOriginal); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal)): ?>
<?php $component = $__componentOriginal; ?>
<?php unset($__componentOriginal); ?>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/usertest.blade.php ENDPATH**/?>