@extends('mainLayout.layout')

@section('title', 'Cart List')



@section('content')

<div class="col-sm-10">

    <!-- Ecartlist.blade.php -->

    <div class="trending-wrapper">

        <h4>Result for Products</h4>

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

                <!-- Missing closing tag? Assuming it's meant to be </a> -->

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

                <button><!-- Button content here --></button>

            </div>

        </div>

        @endforeach

    </div>

</div>




@endsection