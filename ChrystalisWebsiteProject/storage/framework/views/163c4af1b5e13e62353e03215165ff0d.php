<?php $__env->startSection('title', 'Contact Us'); ?>



<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/css-pages/contactus.css'), false); ?>" />

<!-- 
    
CONTACT US CONTENT 

-->

<hr class="my-5">

<h1 class="my-5 text-center">Contact Chrystalis!</h1>

<!-- Contact Form Section -->
<section class="Contact-us">
    <form id="contactForm" onsubmit="return checkForm()" name="contactForm">
        <!-- Form Fields -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required="" />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required="" />

        <label for="confirm-email">Confirm Email:</label>
        <input type="email" id="confirm-email" name="confirm-email" required="" />
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required="" />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required=""></textarea>

        <!-- Submit Button -->
        <input class="btn-outline-primary" type="submit" name="submit" value="Submit" />
    </form>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/contactUs.blade.php ENDPATH**/ ?>