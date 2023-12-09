@extends('mainLayout.layout2')

@section('title', 'Ring')

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

                @foreach ($products as $ring)

                <div class="card mb-4 box-shadow item{{ $ring['id'] == 1 ? 'active' : '' }}">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="card-img-center img-fluid img-responsive" src="{{ $ring['gallery'] }}"
                                style="/*width: 70%; height: 70%;*/" alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">{{ $ring->name }}</h4>
                                <p class="card-text">
                                    {{ $ring->description }}
                                </p>

                                <p class="card-text font-weight-bold">
                                    Price: £30
                                </p>

                                <div class="d-flex justify-content-between align-items-center">

                                    <a href="detail/{{$ring['id']}}"><button type="button"
                                            class="btn btn-medium btn-outline-primary">
                                            View
                                        </button></a>

                                    <form action="/add_to_cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$ring['id']}}">
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
<h1>Rings</h1>
<main>
    <-- Ring 1 <section class="product-container">
        @foreach ($products as $ring)
        <div class="item {{ $ring['id'] == 1 ? 'active' : '' }}">
            <a href="detail/{{$ring['id']}}">
                <img class="card-img-top" src="{{ $ring['gallery'] }}">
                <div class="product-info">
                    <h3>{{ $ring->name }}</h3>
                    <p>{{ $ring->description }}</p>
                </div>
            </a>
        </div>
        @endforeach
        </section>
</main> -->



@endsection




<!-- 


<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<div class="album py-5 bg-light">
    <div class="container py-5">

        <div class="py-3 text-center"></div>
        <div class="row">

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <h4 class="text-center my-3">Product Title</h4>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">

                            <button type="button" class="btn btn-medium btn-outline-primary">
                                View
                            </button>

                            <button type="button" class="btn btn-medium btn-outline-success">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <h4 class="text-center my-3">Product Title</h4>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit
                            longer.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">

                            <button type="button" class="btn btn-medium btn-outline-primary">
                                View
                            </button>

                            <button type="button" class="btn btn-medium btn-outline-success">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
</div> -->


<!--

            <div class="col-md-4 item {{ $ring['id'] == 1 ? 'active' : '' }}">
                <div class="card mb-4 box-shadow">
                    <h4 class="text-center my-3">{{ $ring->name }}</h4>
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                        alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">
                            {{ $ring->description }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">

                            <a href="detail/{{$ring['id']}}">
                                <button type="button" class="btn btn-medium btn-outline-primary">
                                    View
                                </button> </a>

                            <button type="button" class="btn btn-medium btn-outline-success">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

-->