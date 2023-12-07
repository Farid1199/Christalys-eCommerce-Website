<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    @yield('title', 'Chrystalis')
  </title>

  <link rel="stylesheet" href="{{ asset('assets/css/navbar-footer.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/boostrap.min.css')}}">
  <!-- <link rel="stylesheet" href="{{ asset('resources\css\homePage.css')}}"> 
  <link rel="stylesheet" href="resources\css\navbar-footer.css">  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />



  <!--
  -->
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

</head>



<body>

  {{-- ============================ Navigation bar =================== --}}


  <div class="head1">
    @yield('header')
    <header id="main-header" class="shadow">
      <div id="logo" class="ml-5">
        <img src="{{ asset('Images\CatalogueImg\logo-tp.png') }}" alt="TopLeft Logo" style="width: 30%; height: 20%" />
      </div>


      <nav class="navbar navbar-expand-xl navbar-dark navigation-container">

        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarsExample04"
          aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav mr-auto navigation">
            <form class="form-inline mt-2 mr-5 mt-md-0">
              <input class="form-control mr-sm-2 p-1.5" type="text" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success my-2 my-sm-0 p-1.5" type="submit">
                Search
              </button>
            </form>
            <li><a href="/">HOME</a></li>
            <li><a href="{{route('products')}}">PRODUCTS</a></li>
            <li><a href="">CART</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li class="li-log"><a href="{{ url('/loginAdmin') }}">LOG IN</a></li>
            <li class="li-log"><a href="#">SIGN UP</a></li>

          </ul>

        </div>
      </nav>

    </header>

    <div
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

  </div>




  <div class="main">
    @yield('content')
  </div>




  @yield('footer')
  <footer>
    <section id="conclusion">
      <div class="copyright-bottom text-center">
        <p class="m-1">
          &copy; Copyright Chrystalis 2023-2024. All Rights Reserved
        </p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Privacy</a></li>
          <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
          <li class="list-inline-item"><a href="#">Back to top</a></li>
        </ul>
      </div>
    </section>
  </footer>



</body>

</html>



<!--form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
          Search
        </button>
      </form>

      <nav class="navigation-container">

        <ul class="navigation">
          <li><a href="/">HOME</a></li>
          <li><a href="{{route('products')}}">PRODUCTS</a></li>
          <li><a href="">CART</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li class="li-log"><a href="{{ url('/loginAdmin') }}">LOG IN</a></li>
          <li class="li-log"><a href="#">SIGN UP</a></li>

        </ul>
      </nav-->