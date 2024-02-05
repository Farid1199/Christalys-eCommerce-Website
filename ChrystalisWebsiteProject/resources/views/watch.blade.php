@extends('mainLayout.layout2')

@section('title', 'Watch')


@section('content')


<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<!-----------------------------
    MAIN CONTENT
-------------------------------->

<div class="album bg-light py-5">
    <div class="container py-5">

        <div class="py-3 text-center"></div>
        <div class="col">

            <div class="row">

                @foreach ($products as $watch)

                <div class="card mb-4 box-shadow item{{ $watch['id'] == 1 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-fluid img-responsive" src="{{ $watch['gallery'] }}"
                                style="/*width: 70%; height: 70%;*/" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">{{ $watch->name }}</h4>
                                <p class="card-text">
                                    {{ $watch->description }}
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: {{ $watch->price}}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <form action="detail/{{$watch['id']}}" method="GET">
                                        @csrf
                                        <button class="btn btn-outline-primary" id="addToCartBtn"> View </button>
                                    </form>

                                    <form action="/wishlist" method="GET">
                                        @csrf
                                        <button class="btn btn-outline-secondary" id="addToCartBtn"> Add to Wishlist
                                        </button>
                                    </form>

                                    <form action="/add_to_cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$watch['id']}}">
                                        <button class="btn btn-success" id="addToCartBtn"> Add to Cart </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
</div>






<!-- 

<h1>Watches</h1>
<main>
    watch 1 
    <section class="product-container">
        @foreach ($products as $watch)
            <div class="item {{ $watch['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$watch['id']}}">
                    <img class="card-img-top" src="{{ $watch['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $watch->name }}</h3>
                        <p>{{ $watch->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>

-->



@endsection