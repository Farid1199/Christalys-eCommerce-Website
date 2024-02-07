@extends('mainLayout.layout')

@section('title', 'Product Detail')


@section('content')

<!--
<div class="container">
    <div class="container">
        <div class="row">
            <div>
                <img class="card-img-top" src="{{ asset($product['gallery']) }}" alt="">
            </div>

            <div class="col-sm-6">
                <h2>{{$product['name']}}</h2>
                <h3>Price: {{$product['price']}}</h3>
                <p>Details: {{$product['description']}}</p>
                <h6>Category: {{$product['category']}}</h5>

                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">

                        <button>Add to Cart</button>
                    </form>

                    <br><br>
                    <button>Buy Now</button>
                    <br><br>
                     Add more details as needed 
            </div>
        </div>
        
<link rel="stylesheet" href="{{ asset('assets/css/css-pages/contactus.css')}}" />
    </div> -->





<hr class="my-5" />
<hr class="my-5" />

<section id="product-details" class="container my-4" style="padding-top: 20px;">
    <!-- Product 1 -->
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
                <h2>{{$product['name']}}</h2>
                <p>{{$product['description']}}</p>
                <p>Category: {{$product['category']}}</p>
                <p><b>Price: {{$product['price']}}</b></p>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-success" id="addToCartBtn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection