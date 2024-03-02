@extends('mainLayout.layout2')

@section('title', 'Necklace')


@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<!-----------------------------
    MAIN CONTENT
-------------------------------->

<div class="album bg-light py-5">
    <div class="container py-5">

        <div class="py-3 text-center"></div>
        <div class="row">


        <!-- Search Filters Column -->
        <div class="col-md-3">
                <div class="card sticky-sm-top ">
                    <div class="card-body ">



                    <h5 class="card-title">Search Filters</h5>
                    <!-- Search form for category -->
                    <form>

                        <div class="form-group">
                            <label for="min_price">Search by Price</label>
                            <input type="number" class="form-control" id="min_price" name="min_price"
                                placeholder="Min Price" value="{{ request('min_price') }}">
                            <input type="number" class="form-control" id="max_price" name="max_price"
                                placeholder="Max Price" value="{{ request('max_price') }}">
                        </div>

                        <div class="form-group mt-5 text-center">
                            <button class="btn btn-success text-center" type="submit" >Apply Filters</button>
                            <button class="btn btn-primary ml-3" value="{{ request('reset_filters') }} ">Reset Filters</button>
                        </div>
                
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">

                @foreach ($products as $necklace)

                <div class="card mb-4 box-shadow item{{ $necklace['id'] == 1 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-fluid img-responsive" src="{{ $necklace['gallery'] }}"
                                style="width: 250px; height: 250px;" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">{{ $necklace->name }}</h4>
                                <p class="card-text">
                                    {{ $necklace->description }}
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: £{{ $necklace->price}}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <form action="detail/{{$necklace['id']}}" method="GET">
                                        @csrf
                                        <button class="btn btn-outline-primary" id="addToCartBtn"> View </button>
                                    </form>

                                    <form action="/add_to_wishlist" method="POST">
                                        @csrf
                                        <button class="btn btn-outline-secondary" id="addToCartBtn"> Add to Wishlist
                                        </button>
                                        <input type="hidden" value="{{$necklace->id}}" name="product_id" id="product_id">
                                    </form>

                                    <form action="/add_to_cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$necklace['id']}}">
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


<h1>Necklace</h1>
<main>
     Ring 1 
    <section class="product-container">
        @foreach ($products as $necklace)
            <div class="item {{ $necklace['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$necklace['id']}}">
                    <img class="card-img-top" src="{{ $necklace['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $necklace->name }}</h3>
                        <p>{{ $necklace->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>


-->

@endsection