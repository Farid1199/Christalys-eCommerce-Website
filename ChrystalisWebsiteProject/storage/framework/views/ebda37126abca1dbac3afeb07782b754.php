 <!-----------------------------
            HEADER NAVBAR 
    -------------------------------->
    <link href="<?php echo e(url('ChrystalisWebsiteProject\public\CSS\navbar-footer.css'), false); ?> " rel="stylesheet" />

    <?php  ?>
    
        <header>
 
          
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <div id="logo" style="padding-bottom: 10px">
                <img
                  src="img/logo.png"
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

<?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/layouts/mainnavbar.blade.php ENDPATH**/ ?>