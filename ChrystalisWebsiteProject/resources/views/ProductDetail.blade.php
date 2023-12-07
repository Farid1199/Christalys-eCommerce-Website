@extends('mainLayout.layout')

@section('title', 'Ring Detail')


@section('content')


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
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>


@endsection