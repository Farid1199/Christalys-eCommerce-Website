@extends('mainLayout.layout')

@section('title', 'Necklace')



@section('content')
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
          <a href="#" class="btn btn-primary">Visit</a>
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
          <a href="#" class="btn btn-primary">Visit</a>
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
          <a href="#" class="btn btn-primary">Visit</a>
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
          <a href="#" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>

  
</main>




@endsection