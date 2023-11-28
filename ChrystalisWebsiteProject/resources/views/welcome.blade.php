<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\css\navbar-footer.css">

        <!-- Styles -->
        <style>
            /*

MAIN HEADER

*/

#main-header {
    display: flex;
    align-items: center;
    padding: 15px 50px 50px 30px;
    padding-bottom: 15px;
    justify-content: space-between;
    width: 100%;
    flex-wrap: wrap;
    margin: 0 auto;
    background-color: #fff8e7;
  }
  
  #top-nav {
    color: red;
    padding-left: 150px;
  }
  
  #blank {
    padding: 215px;
  }
  
  #conclusion {
    background-color: #f8f9fa;
    padding: 20px;
  }
        </style>
    </head>
    <body>
        <!-----------------------------
            HEADER NAVBAR 
    -------------------------------->
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
                    <a class="nav-link" href="#">Log In</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                           
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Basket</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            <a href="{{ route('aboutus') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About us</a>

                            <a href="{{ route('pruducts') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">pruducts</a>
                        @endauth
                    </div>
                @endif
    
                
            </div>
          </nav>
        </header>
    
        <!-----------------------------
          Introduction Section
    -------------------------------->
    
        <main>
          <p id="blank"></p>
        </main>
    
        <!-----------------------------
          LAST SECTION  
    -------------------------------->
    
        <footer>
          <section id="conclusion">
            <div class="copyright-bottom">
              <marquee>Copyright © 2023 Chrystalis. All rights reserved</marquee>
            </div>
          </section>
        </footer>
      </body>







  
</html>
