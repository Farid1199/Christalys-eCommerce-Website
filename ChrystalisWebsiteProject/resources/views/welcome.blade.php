@extends('mainLayout.layout')

@section('title', 'Welcome')

@section('content')

 <!-----------------------------
        MAIN CONTENT
-------------------------------->
<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" alt="First slide" />
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
              <a class="btn btn-lg btn-primary" href="#" role="button"
                >About Us</a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          class="second-slide"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
          alt="Second slide"
        />
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
              <a class="btn btn-lg btn-primary" href="#" role="button"
                >Discover Chrystalis</a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          class="third-slide"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
          alt="Third slide"
        />
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
              <a class="btn btn-lg btn-primary" href="#" role="button"
                >Browse Catalogue</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
    <a
      class="carousel-control-prev"
      href="#myCarousel"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#myCarousel"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <!-- Three columns of text below the carousel -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-9">
        <h2 class="featurette-heading">Rings</h2>
        <p class="lead">Discover our exquisite collection of rings.</p>
        <p>
          <a class="btn btn-secondary" href="#" role="button"
            >Explore &raquo;</a
          >
        </p>
      </div>
      <div class="col-md-3">
        <img
          class="img-fluid mx-auto"
          src="img/Ring.jpg"
          alt="Generic placeholder image"
        />
      </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette text-right">
      <div class="col-md-9 order-md-2">
        <h2 class="featurette-heading">Watches</h2>
        <p class="lead">Explore our timeless and elegant watches.</p>
        <p>
          <a class="btn btn-secondary" href="#" role="button"
            >Explore &raquo;</a
          >
        </p>
      </div>
      <div class="col-md-3 order-md-1">
        <img
          class="featurette-image img-fluid mx-auto"
          src="img/Watch.jpg"
          alt="Generic placeholder image"
        />
      </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-9">
        <h2 class="featurette-heading">Necklaces</h2>
        <p class="lead">
          Adorn yourself with our stunning necklace collection
        </p>
        <p>
          <a class="btn btn-secondary" href="#" role="button"
            >Explore &raquo;</a
          >
        </p>
      </div>
      <div class="col-md-3">
        <img
          class="featurette-image img-fluid mx-auto"
          src="img/Necklace.jpg"
          alt="Generic placeholder image"
        />
      </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette text-right">
      <div class="col-md-9 order-md-2">
        <h2 class="featurette-heading">Earrings</h2>
        <p class="lead">Enhance your beauty with our elegant earrings</p>
        <p>
          <a class="btn btn-secondary" href="#" role="button"
            >Explore &raquo;</a
          >
        </p>
      </div>
      <div class="col-md-3 order-md-1">
        <img
          class="featurette-image img-fluid mx-auto"
          src="img/Earring.png"
          alt="Generic placeholder image"
        />
      </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row">
      <div class="col-lg-4">
        <img
          class="rounded-circle"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
          alt="Generic placeholder image"
          width="140"
          height="140"
        />
        <h2>Heading</h2>
        <p>
          Donec sed odio dui. Etiam porta sem malesuada magna mollis
          euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
          Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
          Praesent commodo cursus magna.
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img
          class="rounded-circle"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
          alt="Generic placeholder image"
          width="140"
          height="140"
        />
        <h2>Heading</h2>
        <p>
          Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
          eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
          amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor
          mauris condimentum nibh.
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img
          class="rounded-circle"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
          alt="Generic placeholder image"
          width="140"
          height="140"
        />
        <h2>Heading</h2>
        <p>
          Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
          egestas eget quam. Vestibulum id ligula porta felis euismod
          semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
          condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->

    <!-- /END THE FEATURETTES -->
  </div>
  <!-- /.container -->











@endsection

