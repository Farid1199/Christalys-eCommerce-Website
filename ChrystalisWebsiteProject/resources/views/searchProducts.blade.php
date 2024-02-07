@extends('mainLayout.layout2')

@section('title', 'Full Catalogue')



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

                @foreach ($products as $bracelet)

                <div class="card mb-4 box-shadow item{{ $bracelet['id'] == 1 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-fluid img-responsive" src="{{ $bracelet['gallery'] }}"
                                style="width: 250px; height: 250px;" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">{{ $bracelet->name }}</h4>
                                <p class="card-text">
                                    {{ $bracelet->description }}
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: {{ $bracelet->price}}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <!-- 
                                    <a href="detail/{{$bracelet['id']}}"><button type="button"
                                            class="btn btn-medium btn-outline-primary">
                                            View
                                        </button></a>

                                    <a href="/wishlist"><button type="button"
                                            class="btn btn-medium btn-outline-secondary">
                                            Add To Wishlist
                                        </button></a>
-->
                                    <form action="detail/{{$bracelet['id']}}" method="GET">
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
                                        <input type="hidden" name="product_id" value="{{$bracelet['id']}}">
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


<!-- <h1>Bracelet</h1>
<main>
    Ring 1 
    <section class="product-container">
        @foreach ($products as $bracelet)
            <div class="item {{ $bracelet['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$bracelet['id']}}">
                    <img class="card-img-top" src="{{ $bracelet['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $bracelet->name }}</h3>
                        <p>{{ $bracelet->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main> 






-->



@endsection