<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title><?php echo e(config('app.name', 'Login Chrystalis'), false); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-opacity-80">
        <div>
            <a href="/">
                <div id="logo">
                    <img src="<?php echo e(asset('Images\CatalogueImg\logo-tp.png'), false); ?>" alt="TopLeft Logo" style="display: block;
                            margin-left: auto;
                            margin-right: auto;
                            width:40%;
                            height:40%;" class="align-items-center img-fluid" />
                </div>

            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-opacity-20 bg-white/20 backdrop-blur-sm shadow-xl overflow-hidden sm:rounded-lg" style="border: 2px solid #DAA520;">
            <div><?php echo e($slot, false); ?></div>
        </div>
    </div>
<style>
        body {
            background-image: url('<?php echo e(asset("Images/HomePage/login.jpg"), false); ?>');
            background-size: 100%; /* make the image smaller */
        }
</style>
</body>

</html><?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/layouts/guest.blade.php ENDPATH**/ ?>