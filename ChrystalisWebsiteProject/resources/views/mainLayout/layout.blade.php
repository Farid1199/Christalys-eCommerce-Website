<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Chrystalis')
    </title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('resources\css\homePage.css')}}">
    <link rel="stylesheet" href="C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject\resources\css\navbar-footer.css">
    <link rel="stylesheet" href="resources\css\boostrap.min.css">
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />

</head>



<body>

    {{-- ============================          Navigation bar                             =================== --}}


    <div class="head1">
      @yield('header')
      <header id="main-header">
        <div id="logo">
          <img
            src="img/logo.png"
            alt="TopLeft Logo"
            style="width: 30%; height: 20%"
          />
        </div>
  
        <form class="form-inline mt-2 mt-md-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
  
        <nav class="navigation-container">
          <ul class="navigation">
            <li><a href="home.html">HOME</a></li>
            <li><a href="{{route('products')}}">PRODUCTS</a></li>
            <li><a href="">CART</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li class="li-log"><a href="/loginAdmin">LOG IN</a></li>
            <li class="li-log"><a href="#">SIGN UP</a></li>
          </ul>
        </nav>
      </header>
    </div>


    

    <div class="main">
      @yield('content')
    </div>

    

      
        @yield('footer')
        <hr class="mb-4" />
        <footer>
          <section id="conclusion">
            <div class="copyright-bottom text-center">
              <p class="m-1">
                &copy; Copyright Chrystalis 2023-2024. All Rights Reserved
              </p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
                <li class="list-inline-item"><a href="#">Back to top</a></li>
              </ul>
            </div>
          </section>
        </footer>
  

    
</body>
</html>