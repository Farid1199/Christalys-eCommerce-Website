@extends('mainLayout.layout')

@section('title', 'Product Catalogue')

@section('content')

<style>
  body {
    background-color: #f5f5f5; /* Light grey background */
  }
  
  .category-box {
    background-color: #e0e0e0; /* Darker grey for more contrast against the light grey background */
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Slightly darker shadow for more depth */
  }
  
  .category-box-dark {
    background-color: #bcbcbc; /* Even darker grey for significant contrast */
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Consistent shadowing for depth */
  }
  
  .main-content, .category {
    padding: 20px;
    margin-top: 20px;
  }
</style>

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/product.css')}}">
<script>
  Holder.addTheme("thumb", {
    bg: "#55595c",
    fg: "#eceeef",
    text: "Thumbnail",
  });
</script>

<!-----------------------------
    MAIN CONTENT
-------------------------------->

<div class="has-bg-img position-relative overflow-hidden p-3 p-md-5 text-center main-content"
  style="background-image:url('{{ asset('Images/HomePage/fluidbg.png') }}');">

  <div class="col-md-5 p-lg-5 mx-auto my-5 bg-light rounded shadow">
    <h1 class="display-4 font-weight-normal">Discover Chrystalis</h1>
    <p class="lead font-weight-normal">
      Discover the perfect
      expression of your style and individuality with Chrystalis –
      where every piece tells a story as unique as you are.
    </p>
    <a class="btn btn-outline-secondary" href="{{ route('search')}}">Browse Catalogue</a>
  </div>
</div>


<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" id="category">

  <!-- Rings -->
  <div class="category-box-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="py-3">
      <h2 class="display-5">Rings</h2>
      <p class="lead">Discover our exquisite collection of rings</p>
      <p><a href="rings" class="btn btn-secondary my-2">Visit</a></p>
      <img src="{{ asset('Images\CatalogueImg\gold-rings-.png') }}" style="width: 60%; height: 60%;"
        class="my-2 img-thumbnail" alt="Ring" />
    </div>
  </div>

  <!-- Necklaces -->
  <div class="category-box mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="py-3">
      <h2 class="display-5">Necklaces</h2>
      <p class="lead">Adorn yourself with our stunning necklace collection</p>
      <p><a href="necklaces" class="btn btn-secondary my-2">Visit</a></p>
      <img src="{{ asset('Images\CatalogueImg\Neckless1.jpeg') }}" style="width: 60%; height: 60%;"
        class="my-2 img-thumbnail" alt="Necklace" />
    </div>
  </div>
</div>

<!-- Bracelets -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="category-box mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="py-3">
      <h2 class="display-5">Bracelets</h2>
      <p class="lead">Description of the bracelet product</p>
      <p><a href="bracelets" class="btn btn-secondary my-2">Visit</a></p>
      <img src="{{ asset('Images\CatalogueImg\bracelet - 2.jpg') }}" style="width: 60%; height: 60%;"
        class="my-2 img-thumbnail" alt="Bracelet" />
    </div>
  </div>

  <!-- Earrings -->
  <div class="category-box-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="py-3">
      <h2 class="display-5">Earrings</h2>
      <p class="lead">Enhance your beauty with our elegant earrings</p>
      <p><a href="earrings" class="btn btn-secondary my-2">Visit</a></p>
      <img src="{{ asset('Images\CatalogueImg\earrings - 1.jpg') }}" style="width: 60%; height: 60%;"
        class="my-2 img-thumbnail" alt="Earrings" />
    </div>
  </div>
</div>

<!-- Watches -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="category-box-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="py-3">
      <h2 class="display-5">Watches</h2>
      <p class="lead">Explore our timeless and elegant watches</p>
      <p><a href="watches" class="btn btn-secondary my-2">Visit</a></p>
      <img src="{{ asset('Images\CatalogueImg\Watch-1.jpg') }}" style="width: 50%; height: 50%;"
        class="my-2 img-thumbnail" alt="Watches" />
    </div>
  </div>

  <!-- Coming Soon -->
  <div class="category-box mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="py-3">
      <h2 class="display-5">Coming Soon</h2>
      <p class="lead">Coming Soon</p>
      <p><a href="#" class="btn btn-secondary my-2">Visit</a></p>
      <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px"></div>
    </div>
  </div>
</div>

@endsection
