@extends('mainLayout.layout')

@section('title', 'Cart List')



@section('content')


<div class="container">
    <div class="container">

        @foreach ($products as $item)
            
        
        <div class="row">
            <div>
                <img class="card-img-top" src="{{ asset($item->gallery )}}" alt="">
            </div>

            <div class="col-sm-6">
                <h2>{{$item->name}}</h2>
                <h5>{{$item->description}}</h5>

                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$item->id}}">

                        <button>Remove From Cart</button>
                    </form>

                    <!-- Add more details as needed -->
            </div>
        </div>

        @endforeach
    </div>





@endsection