@extends('mainLayout.layout')

@section('title', 'Product Detail')

@section('content')




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
                        <img src="{{ asset($product['gallery']) }}" class="img-fluid img-thumbnail float-right"
                            style="max-width: 450px; height: 450px;" alt="Product Image">
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
