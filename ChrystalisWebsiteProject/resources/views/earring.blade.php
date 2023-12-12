@extends('mainLayout.layout')

@section('title', 'Earring')



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

                @foreach ($products as $earring)

                <div class="card mb-4 box-shadow item{{ $earring['id'] == 1 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-fluid img-responsive"
                                src="{{ $earring['gallery'] }}"
                                style="/*width: 70%; height: 70%;*/" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">{{ $earring->name }}</h4>
                                <p class="card-text">
                                    {{ $earring->description }}
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: £30
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="detail/{{$earring['id']}}"><button type="button"
                                            class="btn btn-medium btn-outline-primary">
                                            View
                                        </button></a>

                                <form action="/add_to_cart" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$earring['id']}}">
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

<h1>Earring</h1>
<main>
    Ring 1 
    <section class="product-container">
        @foreach ($products as $earring)
            <div class="item {{ $earring['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$earring['id']}}">
                    <img class="card-img-top" src="{{ $earring['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $earring->name }}</h3>
                        <p>{{ $earring->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>

-->

@endsection
        