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
    </div> -->



    <link rel="stylesheet" href="{{ asset('assets/css/css-pages/contactus.css')}}" />


    <hr class="my-5" />
    
    <section id="product-details" class="container my-4" style="padding-top:20px;">
        <!-- Product 1 -->
        <div class="seperate Watches">
            <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner" style="width:100%; height:100%;">
                    <div class="carousel-item active">
                        <img src="{{ asset($product['gallery']) }}"
                             class="img-fluid img-thumbnail w-70 h-70">
                    </div>
                </div>            
            </div>
            <div class="watchesSeperate">
                <div class="row align-items-center">
                    <h2>{{$product['name']}}</h2>
                    <p>{{$product['description']}} </p>
                    <p>Category: {{$product['category']}} </p>
        
                    <p><b>Price: {{$product['price']}}</b></p>
                </div>
    
                <div class="d-flex justify-content-between">
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