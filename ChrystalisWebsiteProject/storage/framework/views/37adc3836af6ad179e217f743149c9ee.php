<!DOCTYPE html>
<html lang="en">
  <!-----------------------------
          TITLE HEAD
-------------------------------->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Chrystalis</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                <a class="nav-link" href="AccountSelection.html">Log In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-----------------------------
      LOGIN Section
-------------------------------->

    <main class="main-selection">
      <div class="button-container">
        <a href="<?php echo e(route('login'), false); ?>" class="styled-button">Log In as User</a>
        <a href="admin-login.html" class="styled-button">Log In as Admin</a>
      </div>
    </main>

    <!-----------------------------
      LAST SECTION  
-------------------------------->

    <footer>
      <section id="conclusion">
        <div class="copyright-bottom">
          <marquee>Copyright © 2023 Polaris. All rights reserved</marquee>
        </div>
      </section>
    </footer>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\views/loginUserAdmin.blade.php ENDPATH**/ ?>