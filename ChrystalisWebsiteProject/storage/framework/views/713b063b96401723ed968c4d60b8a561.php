<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
$total = ProductController::cartItem();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $__env->yieldContent('title', 'Chrystalis'); ?>
    </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="icon" href="<?php echo e(asset('assets/Images/HomePage/favicon.png'), false); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/navbar-footer.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/boostrap.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css'), false); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('resources\css\homePage.css'), false); ?>"> 
  <link rel="stylesheet" href="resources\css\navbar-footer.css">  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!--
  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery ||
            document.write('<script src="resources/js/jquery-slim.min.js"><\/script>');
    </script>
    <script src="<?php echo e(asset('js/jquery-slim.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js'), false); ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo e(asset('js/holder.min.js'), false); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="head1"><?php echo $__env->yieldContent('header'); ?> <header id="main-header" class="shadow">
            <div id="logo" class="ml-5"><img src="<?php echo e(asset('Images\CatalogueImg\logo-tp.png'), false); ?>" alt="TopLeft Logo"
                    style="width: 30%; height: 20%" /></div>
            <nav class="navbar navbar-expand-xl navbar-dark navigation-container"><button class="navbar-toggler bg-dark"
                    type="button" data-toggle="collapse" data-target="#navbarsExample04"
                    aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto navigation">
                        <form class="form-inline mr-3 mt-2 mt-md-0"><input class="form-control mr-sm-2 p-1.5"
                                type="text" placeholder="Search" aria-label="Search" name="search"
                                value="<?php echo e(request('search'), false); ?>" /><button
                                class="btn btn-outline-success my-2 my-sm-0 p-1.5" type="submit">Search </button></form>
                        <?php if(Auth::check()): ?> <li><a href="/">HOME</a></li>
                        <li><a href="<?php echo e(route('products'), false); ?>">PRODUCTS</a></li>
                        <li><a href="<?php echo e(route('aboutus'), false); ?>">ABOUT US</a></li>
                        <li><a href="cartlist">CART(<?php echo e($total, false); ?>)</a></li>
                        <li class="li-log"><a href="<?php echo e(route('dashboard'), false); ?>"> <?php echo e(__('DASHBOARD'), false); ?> </a></li>
                        <!-- Authentication -->
                        <li class="li-log">
                            <form method="POST" action="<?php echo e(route('logout'), false); ?>"><?php echo csrf_field(); ?> <a href="<?php echo e(route('logout'), false); ?>"
                                    onclick="event.preventDefault(); this.closest('form').submit();"> <?php echo e(__('LOG OUT'), false); ?>

                                </a></form>
                        </li><?php else: ?> <li><a href="/">HOME</a></li>
                        <li><a href="<?php echo e(route('products'), false); ?>">PRODUCTS</a></li>
                        <li><a href="<?php echo e(route('aboutus'), false); ?>">ABOUT US</a></li>
                        <li><a href="cartlist">CART(<?php echo e($total, false); ?>)</a></li>
                        <li class="li-log"><a href="<?php echo e(route('login'), false); ?>">LOG IN</a></li>
                        <li class="li-log"><a href="<?php echo e(route('register'), false); ?>">SIGN UP</a></li><?php endif; ?>
                    </ul>
                </div>
            </nav>
        </header>
        <div
            class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <?php if(Route::has('login')): ?> <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"><?php if(auth()->guard()->check()): ?> <a
                    href="<?php echo e(url('/dashboard'), false); ?>"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a><?php else: ?>
                <a href="<?php echo e(route('login'), false); ?>"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a><?php if(Route::has('register')): ?> <a href="<?php echo e(route('register'), false); ?>"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a><?php endif; ?>
                <?php endif; ?>
            </div><?php endif; ?> </div>
    </div>
    <div class="main"><?php echo $__env->yieldContent('content'); ?> </div><?php echo $__env->yieldContent('footer'); ?> <footer>
        <section id="conclusion">
            <div class="copyright-bottom text-center">
                <p class="m-1">&copy;
                    Copyright Chrystalis 2023-2024. All Rights Reserved </p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="<?php echo e(asset('Images\HomePage\privacyp.png'), false); ?>">Privacy</a></li>
                    <li class="list-inline-item"><a href="<?php echo e(asset('Images\HomePage\privacyp.png'), false); ?>">Terms</a></li>
                    <li class="list-inline-item"><a href="<?php echo e(route('contactus'), false); ?>">Support</a></li>
                    <li class="list-inline-item"><a href="#">Back to top</a></li>
                </ul>
            </div>
        </section>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/mainLayout/layout2.blade.php ENDPATH**/ ?>