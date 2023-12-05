@extends('mainLayout.layout')

@section('title', 'Product Catalogue')



@section('content')


<main class="container mt-5">
  <h2>Product Catalogue</h2>

  <!-- Product 1: Ring and Product 2: Necklace -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="{{ asset('Images\CatalogueImg\gold-rings-.png') }}" class="card-img-top" alt="Ring" />
        <div class="card-body">
          <h5 class="card-title">Ring</h5>
          <p class="card-text">Description of the ring product.</p>
          <a href="rings" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-4">
        <img src="{{ asset('Images\CatalogueImg\Neckless1.jpeg') }}" class="card-img-top" alt="Necklace" />
        <div class="card-body">
          <h5 class="card-title">Necklace</h5>
          <p class="card-text">Description of the necklace product.</p>
          <a href="necklaces" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Product 3: Bracelet and Product 4: Earrings -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="{{ asset('Images\CatalogueImg\bracelet - 2.jpg') }}" class="card-img-top" alt="Bracelet" />
        <div class="card-body">
          <h5 class="card-title">Bracelet</h5>
          <p class="card-text">Description of the bracelet product.</p>
          <a href="bracelets" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-4">
        <img src="{{ asset('Images\CatalogueImg\earrings - 1.jpg') }}" class="card-img-top" alt="Earrings" />
        <div class="card-body">
          <h5 class="card-title">Earrings</h5>
          <p class="card-text">Description of the earrings product.</p>
          <a href="earrings" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Product 5: Watches -->
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="{{ asset('Images\CatalogueImg\Watch-1.jpg') }}" class="card-img-top" alt="Watches" />
        <div class="card-body">
          <h5 class="card-title">Watches</h5>
          <p class="card-text">Description of the watches product.</p>
          <a href="watches" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

</main>





@endsection