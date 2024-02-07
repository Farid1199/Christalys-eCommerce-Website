@extends('mainLayout.layout')

@section('title', 'Wishlist')

@section('content')

<div class="container py-5">
    <div class="py-5 text-center"></div>

    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Wishlist</h4>
                @foreach($products as $item)
                <div class="row searched-item">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                            <div>
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <button>Add to Cart</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
