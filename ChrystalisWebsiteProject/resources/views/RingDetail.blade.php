@extends('mainLayout.layout')

@section('title', 'Ring Detail')


@section('content')


<div class="container">
    <div class="container">
        <div class="row">
            <div>
                <img class="card-img-top" src="{{asset($ring['gallery']) }}" alt="">
            </div>
    
            <div class="col-sm-6">
                <h2>{{$ring['name']}}</h2>
                <h3>Price: {{$ring['price']}}</h3>
                <p>Details: {{$ring['description']}}</p>
                <h6>Category: {{$ring['category']}}</h5>

                    <br><br>
                    <button>Add to Cart</button>
                    <br><br>
                    <button>Buy Now</button>
                    <br><br>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>


@endsection