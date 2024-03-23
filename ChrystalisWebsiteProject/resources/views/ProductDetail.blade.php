@extends('mainLayout.layout')

@section('title', 'Product Detail')

@section('content')

  

    <style>
   
        .zoomable-image-container {
        overflow: hidden;
        position: relative;
        width: 450px;
        height: 450px; 
        cursor: zoom-in;
    }

    .zoomable-image {
        display: block;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease;
    }

    body {
        background-color: #e9ecef; 
    }

    .album {
        background-color: #f8f9fa; /* Slightly lighter grey to contrast against the body */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card {
        background-color: #dee2e6; /* Grey card background for better content readability */
        border: none;
    }
  

    .btn-outline-secondary, .btn-grey, .btn-outline-grey {
        color: #6c757d; /* Adjusting for consistency */
        border-color: #6c757d; /* Grey border for buttons */
    }

    .btn-outline-secondary:hover, .btn-grey:hover, .btn-outline-grey:hover {
        color: #fff; /* White text on hover */
        background-color: #5a6268; /* Darker grey background on hover */
        border-color: #545b62; /* Darker grey border on hover */
    }

    .btn-success, .btn-primary {
        background-color: #6c757d; /* Adjusting primary and success buttons to match grey scheme */
        border-color: #6c757d; /* Consistent border color */
    }

    .btn-success:hover, .btn-primary:hover {
        background-color: #5a6268; /* Darker grey on hover */
        border-color: #545b62; /* Darker border color on hover */
    }

    .form-control {
        border-radius: 0.25rem;
    }

    .sticky-sm-top {
        top: 0;
        z-index: 1020;
    }


    </style>

<script>
  window.onload = function() {
    const container = document.querySelector('.zoomable-image-container');
    const image = document.querySelector('.zoomable-image');

    container.addEventListener('mousemove', function(event) {
        const { left, top, width, height } = container.getBoundingClientRect();
        const mouseX = event.clientX - left;
        const mouseY = event.clientY - top;

        // Setting the transform origin to the mouse position for zooming around the cursor
        const originX = (mouseX / width) * 100;
        const originY = (mouseY / height) * 100;
        image.style.transformOrigin = `${originX}% ${originY}%`;

        // Adjusting the scale value for zoom. You may tweak the '2' (zoom level) as needed.
        image.style.transform = 'scale(2)';
    });

    container.addEventListener('mouseleave', function() {
        // Resetting the image transform to its original state
        image.style.transform = 'scale(1)';
        image.style.transformOrigin = 'center center'; // Resetting the transform origin
    });
};

</script>




<hr class="my-5" />
<hr class="my-5" />


<!-- Add this section for displaying flash messages -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<section id="product-details" class="container my-4" style="padding-top: 20px;">
        <div class="row">
            <div class="col-md-5">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="zoomable-image-container shadow rounded">
                                <img src="{{ asset($product['gallery']) }}" class="zoomable-image img-fluid img-thumbnail"
                                    style="max-width: 450px; height: 450px;" alt="Product Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="watchesSeperate">
                    <h2>{{ $product['name'] }}</h2>
                    <p>{{ $product['description'] }}</p>
                    <p><b>Category: {{ $product['category'] }}</b></p>
                    <p><b>Price: £{{ $product['price'] }}</b></p>

                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control mb-3" style="width: auto;">

                        <button class="btn btn-success mb-3" id="addToCartBtn">Add to Cart</button>
                    </form>
                    <form action="/add_to_wishlist" method="POST">
                        @csrf
                        <button class="btn btn-outline-secondary" id="addToWishlistBtn"> Add to Wishlist
                        </button>
                        <input type="hidden" value="{{ $product['id'] }}" name="product_id">
                    </form>
                    
                </div>
            </div>
        </div>

        
        @include('shared.comments-box')
        
    </section>

    <section id="featured-products" class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Featured products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @php
$featuredProducts = DB::table('products')->inRandomOrder()->take(4)->get();

            @endphp

            @foreach ($featuredProducts as $product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset($product->gallery) }}" alt="{{ $product->name }}" style="max-width: auto; height: auto;">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $product->name }}</h5>
                                <!-- Product price-->
                                <h7>Price: £{{ $product->price }}</h7>                            
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form action="/detail/{{$product->id}}" method="GET">
                                    @csrf
                                    <button class="btn btn-outline-secondary" id="addToCartBtn">View Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>










@endsection
