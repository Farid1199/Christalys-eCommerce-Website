<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalogue Page</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Basket Page</title>
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <link
          rel="stylesheet"
          href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        />
        <link rel="stylesheet" type="text/css" href="css/BasketPage.css" />
      </head>

      <body>
        <!-----------------------------
        HEADER NAVBAR 
-------------------------------->

        <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <div id="logo" style="padding-bottom: 10px">
                <img
                  src="Images\logo.png"
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
                    <a class="nav-link active" aria-current="page" href="#"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Log In</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <main class="container mt-5">
          <h2>Product Catalogue</h2>

          <div class="row mt-4">
            <!-- Product 1: Ring -->
            <div class="col-md-6">
              <div class="card mb-4">
                <img
                  src="Images\gold-rings-.png"
                  class="card-img-top"
                  alt="Ring"
                />
                <div class="card-body">
                  <h5 class="card-title">Ring</h5>
                  <p class="card-text">Description of the ring product.</p>
                  <a href="<?php echo e(route('rings'), false); ?>" class="btn btn-primary">Visit</a>
                </div>
              </div>
            </div>

            <!-- Product 2: Necklace -->
            <div class="col-md-6">
              <div class="card mb-4">
                <img
                  src="Images\Neckless2.jpeg"
                  class="card-img-top"
                  alt="Necklace"
                />
                <div class="card-body">
                  <h5 class="card-title">Necklace</h5>
                  <p class="card-text">Description of the necklace product.</p>
                  <a href="<?php echo e(route('necklaces'), false); ?>" class="btn btn-primary">Visit</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <!-- Product 3: Bracelet -->
            <div class="col-md-6">
              <div class="card mb-4">
                <img
                  src="Images\bracelet - 2.jpg"
                  class="card-img-top"
                  alt="Bracelet"
                />
                <div class="card-body">
                  <h5 class="card-title">Bracelet</h5>
                  <p class="card-text">Description of the bracelet product.</p>
                  <a href="<?php echo e(route('bracelets'), false); ?>" class="btn btn-primary">Visit</a>
                </div>
              </div>
            </div>

            <!-- Product 4: Earrings -->
            <div class="col-md-6">
              <div class="card mb-4">
                <img
                  src="Images\earrings - 1.jpg"
                  class="card-img-top"
                  alt="Earrings"
                />
                <div class="card-body">
                  <h5 class="card-title">Earrings</h5>
                  <p class="card-text">Description of the earrings product.</p>
                  <a href="<?php echo e(route('earrings'), false); ?>" class="btn btn-primary">Visit</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 5: Watches -->
          <div class="col-md-6">
            <div class="card mb-4">
              <img
                src="Images\Watch-1.jpg"
                class="card-img-top"
                alt="Watch"
              />
              <div class="card-body">
                <h5 class="card-title">Watches</h5>
                <p class="card-text">Description of the watch product.</p>
                <a href="<?php echo e(route('watches'), false); ?>" class="btn btn-primary">Visit</a>
              </div>
            </div>
          </div>
        </div>
        </main>

        <footer>
          <section id="conclusion">
            <div class="copyright-bottom">
              <marquee
                >Copyright © 2023 Chrystalis. All rights reserved</marquee
              >
            </div>
          </section>
        </footer>
      </body>
    </html>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\GitHub\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/productCatalogue.blade.php ENDPATH**/ ?>