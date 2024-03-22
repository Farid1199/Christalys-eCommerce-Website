@extends('mainLayout.layout')

@section('title', 'Home Page')

@section('content')




<link rel="stylesheet" href="{{ asset('assets/css/css-pages/homePage.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/css/css-pages/ministore.css')}}" />
<!-----------------------------
        MAIN CONTENT
-------------------------------->

<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
  <symbol xmlns="http://www.w3.org/2000/svg" id="cart-outline" viewBox="0 0 16 16">
    <path
      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" id="quality" viewBox="0 0 16 16">
    <path
      d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" id="price-tag" viewBox="0 0 16 16">
    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
    <path
      d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" id="shield-plus" viewBox="0 0 16 16">
    <path
      d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
    <path
      d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
  </symbol>
</svg>


<style>
hr.gradient {
  height: 3px;
  border: none;
  border-radius: 6px;
  background: linear-gradient(
    90deg,
    rgba(0, 0, 0, 1) 0%,   /* dark grey at 0% */
    rgba(50, 50, 50, 1) 21%,  /* dark gull grey at 21% */
    rgba(130, 130, 130, 1) 51%,  /* silver at 51% */
    rgba(211, 211, 211, 1) 100%  /* light grey at 100% */
  );
}


</style>

<hr class="mb-3" />
<hr class="mb-3" />
<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="{{ asset('Images\HomePage\carosel1.jpg') }}" alt="First slide" />
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Welcome to Chrystalis</h1>
            <p>
              Welcome to Chrystalis, where elegance meets craftsmanship in
              the world of fine jewelry. Our passion for beauty and
              attention to detail are reflected in every piece, creating a
              collection that celebrates the artistry of adornment.
            </p>
            <p>
              <a class="btn btn-lg btn-secondary" href="{{route('aboutus')}}" role="button">About Us</a>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="{{ asset('Images\HomePage\carosel2.jpg') }}" alt="Second slide" />
        <div class="container">
          <div class="carousel-caption">
            <h1>Discover Chrystalis</h1>
            <p>
              Whether you're seeking a statement piece or a cherished gift,
              Chrystalis invites you to immerse yourself in a world of
              captivating jewelry that transcends trends and embraces the
              enduring allure of graceful refinement.
            </p>
            <p>
              <a class="btn btn-lg btn-secondary" href="#down" role="button">Discover Chrystalis</a>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="{{ asset('Images\HomePage\carosel3.jpg') }}" alt="Third slide" />
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Chrystalis Awaits You</h1>
            <p>
              Explore our curated selection of exquisite rings, necklaces,
              bracelets, and more, each intricately designed to capture the
              essence of timeless sophistication. Discover the perfect
              expression of your style and individuality with Chrystalis –
              where every piece tells a story as unique as you are.
            </p>
            <p>
              <a class="btn btn-lg btn-secondary" href="{{route('products')}}" role="button">Browse Catalogue</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" id="down">
    <!-- Three columns of text below the carousel -->

    <!-- START THE FEATURETTES -->



    <div class="row featurette mt-5">
      <div class="col-md-9">
        <h2 class="featurette-heading">Rings</h2>
        <p class="lead">Discover our exquisite collection of rings.</p>
        <p>
          <a class="btn btn-secondary" href="rings" role="button">Explore &raquo;</a>
        </p>
      </div>
      <div class="col-md-3">
        <img class="img-fluid mx-auto" src="{{ asset('Images\CatalogueImg\gold-rings-.png') }}"
          alt="Generic placeholder image" />
      </div>
    </div>

    <hr class="featurette-divider gradient" />

    <div class="row featurette text-right">
      <div class="col-md-9 order-md-2">
        <h2 class="featurette-heading">Watches</h2>
        <p class="lead">Explore our timeless and elegant watches.</p>
        <p>
          <a class="btn btn-secondary" href="watches" role="button">Explore &raquo;</a>
        </p>
      </div>
      <div class="col-md-3 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('Images\CatalogueImg\Watch-1.jpg') }}"
          alt="Generic placeholder image" />
      </div>
    </div>

    <hr class="featurette-divider gradient" />

    <div class="row featurette">
      <div class="col-md-9">
        <h2 class="featurette-heading">Necklaces</h2>
        <p class="lead">
          Adorn yourself with our stunning necklace collection
        </p>
        <p>
          <a class="btn btn-secondary" href="necklaces" role="button">Explore &raquo;</a>
        </p>
      </div>
      <div class="col-md-3">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('Images\CatalogueImg\Neckless1.jpeg') }}"
          alt="Generic placeholder image" />
      </div>
    </div>

    <hr class="featurette-divider gradient" />

    <!-- 

    SALE SECTION 

-->

    <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-md" style="
        background-image: url('{{ asset('Images/HomePage/watchbanner.jpg') }}');
        background-position: right; 
        object-fit: cover; 
      ">
      <div class="row d-flex flex-wrap align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="text-content offset-4 padding-medium text-light">
            <h3>10% off</h3>
            <h2 class="display-2 pb-5 text-uppercase text-light">
              New year sale
            </h2>
            <a href="{{route('products')}}" class="btn btn-medium btn-light text-uppercase btn-rounded-none">Shop
              Sale</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12"></div>
      </div>
    </section>

    <!-- 
  
TESTIMONIALS AND ENDINGS 

-->

    <hr class="featurette-divider gradient" />
  <section class="row my-5 py-5 bg-light">
    <div class="text-center">
        <h2 class="section-heading text-uppercase py-4">Hear from our Customers</h2>
    </div>
      <div class="col-lg-4">
        <img class="rounded-circle my-4" src="{{ asset('Images\HomePage\2girl.jpg') }}" alt="Generic placeholder image"
          width="140" height="140" />
        <h2>Sarah M.</h2>
        <p class="text-muted">
          "Absolutely in love with my new ring from Chrystalis! The craftsmanship is exceptional, and the attention to
          detail is superb. It's the perfect addition to my jewelry collection."
        </p>
        <p>Rating: ★★★★</p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle my-4" src="{{ asset('Images\HomePage\flavio.png') }}" alt="Generic placeholder image"
          width="140" height="140" />
        <h2>James L.</h2>
        <p class="text-muted">
          "I had a fantastic experience shopping at Chrystalis. The website is easy to navigate, the customer service
          is
          top-notch, and my necklace arrived beautifully packaged!"
        </p>
        <p>Rating: ★★★★★</p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle my-4" src="{{ asset('Images\HomePage\emily.jpg') }}" alt="Generic placeholder image"
          width="140" height="140" />
        <h2>Emily R.</h2>
        <p class="text-muted">
          "The earrings I purchased exceeded my expectations. They're elegant, comfortable to wear, and I've received
          so
          many compliments. I'll definitely be a returning customer!"
        </p>
        <p>Rating: ★★★★★</p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->

    <!-- /END THE FEATURETTES -->
</section>
  <!-- /.container -->


  <section id="company-services" class="padding-large">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="cart-outline">
                <use xlink:href="#cart-outline" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">
                Free delivery
              </h3>
              <p>Get your order delivered for free today</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="quality">
                <use xlink:href="#quality" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">
                Quality guarantee
              </h3>
              <p>We stand behind our products’ quality</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="price-tag">
                <use xlink:href="#price-tag" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">
                Daily offers
              </h3>
              <p>Check out our daily deals and save</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="shield-plus">
                <use xlink:href="#shield-plus" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h3 class="card-title text-uppercase text-dark">
                100% secure payment
              </h3>
              <p>Shop with confidence and peace of mind</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection