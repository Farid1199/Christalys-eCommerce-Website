@extends('mainLayout.layout')

@section('title', 'Product Detail')

@section('content')

    <!-- Other meta tags, title, and stylesheets -->

    <style>
   
        .zoomable-image-container {
        overflow: hidden;
        position: relative;
        width: 450px; /* Adjust this value as per your image width */
        height: 450px; /* Adjust this value as per your image height */
        cursor: zoom-in; /* Makes the cursor appear as a magnifying glass */
    }

    .zoomable-image {
        display: block;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease;
    }

    body {
        background-color: #e9ecef; /* Slightly darker grey for the overall background */
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
            <div class="col-md-6">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="zoomable-image-container">
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
                    <p>Category: {{ $product['category'] }}</p>
                    <p><b>Price: {{ $product['price'] }}</b></p>
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
    </section>

@endsection
