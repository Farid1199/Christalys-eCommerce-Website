<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $__env->yieldContent('title', 'Chrystalis'); ?>
    </title>
 
    <link rel="stylesheet" href="<?php echo e(asset('assets\css/main.css'), false); ?>">
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />

</head>
<body>

    


    <div class="head1">
      <?php echo $__env->yieldContent('header'); ?>
    <header>
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <div id="logo" style="padding-bottom: 10px">
              <img
                src=<?php echo e(asset('Images/CatalogueImg/logo.png'), false); ?>

                alt="TopLeft Logo"
                style="padding-left: 50px; width: 35%; height: 35%"
              />
            </div>
  
            <form class="d-flex flex-grow-1 mx-auto" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul id="top-nav" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(route('earrings'), false); ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link" href="<?php echo e(route('products'), false); ?>">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/loginAdmin">Log In</a>
                </li>
              </ul>
            </div>
          </div>

        </nav>
      </header>
    </div>


    

    <div class="main">
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    

      <footer>
        <?php echo $__env->yieldContent('footer'); ?>
        <footer>
            <section id="conclusion">
              <div class="copyright-bottom">
                <marquee>Copyright © 2023 Chrystalis. All rights reserved</marquee>
              </div>
            </section>
          </footer>
      </footer>

    
</body>
</html><?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/mainLayout/layout.blade.php ENDPATH**/ ?>