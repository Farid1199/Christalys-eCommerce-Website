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
    @yield('title', 'Chrystalis')
  </title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <link rel="icon" href="{{ asset('assets/Images/Homepage/favicon.png')}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('assets/css/boostrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
  <!-- <link rel="stylesheet" href="{{ asset('resources\css\homePage.css')}}"> 
  <link rel="stylesheet" href="resources\css\navbar-footer.css">  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="{{ asset('assets/css/css-pages/ministore.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/css-pages/font-awesome.min.css')}}" />

  <!-- Bootstrap icons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery ||
      document.write('<script src="resources/js/jquery-slim.min.js"><\/script>');
  </script>
  <script src="{{ asset('js/jquery-slim.min.js')}}"></script>
  <script src="{{ asset('js/popper.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="{{ asset('js/holder.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</head>



<body>

  {{-- ============================ Navigation bar =================== --}}


  <div class="head1">
    @yield('header')
    <header class="fixed-top">
      <div class="px-3 py-2 border-bottom" style="background-color: #f8f9fa;">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <a href="#!" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none">
              <div id="logo" class="ml-5">
                <img src="{{ asset('Images\CatalogueImg\logo-tp.png') }}" alt="TopLeft Logo"
                  style="width: 30%; height: 20%" />
              </div>


            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
              <li>
                <a href="/" class="nav-link text-dark">
                  <i class="fa fa-home d-block mx-auto mb-1 fa-2x text-center"> </i>
                  Home
                </a>
              </li>
              <li>
                <a href="{{ route('dashboard') }}" class="nav-link text-secondary">
                  <i class="fa fa-user d-block mx-auto mb-1 fa-2x text-center"> </i>
                  {{ __('Dashboard') }}
                </a>
              </li>
              <li>
                <a href="{{route('products')}}" class="nav-link text-secondary">
                  <i class="fa fa-shopping-bag d-block mx-auto mb-1 fa-2x text-center"> </i>
                  Products
                </a>
              </li>
              <li>
                <a href="{{ route('cartlist') }}" class="nav-link text-secondary">
                  <i class="fa fa-shopping-cart d-block mx-auto mb-1 fa-2x text-center"> </i>
                  Cart({{ $total }})
                </a>
              </li>
              <li>

                <a href="{{route('wishlist')}}" class="nav-link text-secondary">
                  <i class="fa fa-star d-block mx-auto mb-1 fa-2x text-center"> </i>
                  Wish List
                </a>
              </li>
              <li>

                <a href="{{route('aboutus')}}" class="nav-link text-secondary">
                  <i class="fa fa-info-circle d-block mx-auto mb-1 fa-2x text-center"> </i>
                  About Us
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      @if (Auth::check())
      <div class="px-3 py-2 border-bottom mb-3" style="background-color: white;">
        <div class="container d-flex flex-wrap justify-content-center">
          <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">

          </form>

          <div class="text-end">
            <button type="button" class="btn btn-primary">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                  {{ __('Log Out') }}
                </a>
              </form>
            </button>
          </div>
        </div>
      </div>

      @else
      <div class="px-3 py-2 border-bottom mb-3" style="background-color: white;">
        <div class="container d-flex flex-wrap justify-content-center">
          <form class="col-6 col-lg-auto d-flex flex-grow-1 mr-5 pr-5" role="search">

          </form>


          <div class="text-end">
            <a href="{{ route('login') }}"><button type="button" class="btn btn-light text-dark me-2">
                Login
              </button></a>
            <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Sign-up</button>
            </a>
          </div>
        </div>
      </div>

      @endif
    </header>


    <!--    <div
      class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
      @if (Route::has('login'))
      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
        <a href="{{ url('/dashboard') }}"
          class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}"
          class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
          in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}"
          class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
        @endauth
      </div>
      @endif

    </div>
-->

  </div>




  <div class="main">
    <hr class="mb-5">
    @yield('content')
  </div>




  @yield('footer')
  <!-- Footer -->
  <footer class="text-center text-lg-start text-dark" style="background-color: #eceff1">


    <!-- Section: Social media -->
    <section id="conclusion" class="d-flex justify-content-between p-4 text-white" style="background-color: #969696">

      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="text-md-start mt-5 px-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md col-lg col-xl mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Chrystalis</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              Thank you for choosing Chrystalis. We look forward to being a
              part of your special moments and helping you express your unique
              style and individuality through our stunning jewelry collection.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md col-lg col-xl-3 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Information</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              <a href="{{route('welcome')}}" class="list-inline-item">Home page</a>
            </p>
            <p>
              <a href="{{route('products')}}" class="list-inline-item">Browse Our Catalogue</a>
            </p>
            <p>
              <a href="{{route('contactus')}}" class="list-inline-item">Contact Us</a>
            </p>
            <p>
              <a href="{{route('aboutus')}}" class="list-inline-item">About Us</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md col-lg col-xl-3 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              <a href="{{route('dashboard')}}" class="list-inline-item">Your Account</a>
            </p>
            <p>
              <a href="{{route('cartlist')}}" class="list-inline-item">Your Cart</a>
            </p>
            <p>
              <a href="{{route('previousOrders')}}" class="list-inline-item">Previous Orders</a>
            </p>
            <p>
              <a href="{{ route('profile.edit') }}" class="list-inline-item">Account Settings</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md col-lg col-xl mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact Us</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              <i class="fas fa-home mr-1"></i> 33 Road, Birmingham, B87 8HG
            </p>
            <p><i class="fas fa-envelope mr-1"></i> chrystalis@example.com</p>
            <p><i class="fas fa-phone mr-1"></i> + 44 2345 678 098</p>
            <p><i class="fas fa-print mr-1"></i> + 44 2342 567 389</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); text-decoration: none">
      © Copyright Chrystalis 2023-2024. All Rights Reserved

      <ul class="list-inline pt-2">
        <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Privacy</a></li>
        <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Terms</a></li>
        <li class="list-inline-item"><a href="{{route('contactus')}}">Support</a></li>
        <li class="list-inline-item"><a href="#">Back to top</a></li>
      </ul>
    </div>


    </section>
  </footer>

</body>

</html>