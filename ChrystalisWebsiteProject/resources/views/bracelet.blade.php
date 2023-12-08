@extends('mainLayout.layout')

@section('title', 'Bracelets')



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


            <div class="row">
                <div class="card mb-4 box-shadow">
                    <div class="row">
                        <div class="col">
                            <img class="card-img-left img-thumbnail img-responsive"
                                src="{{ asset('Images\CatalogueImg\Watch-1.jpg') }}" style="width: 100%; height: 50%;"
                                alt="Card image cap" />
                        </div>
                        <div class="col-8">
                            <h4 class="text-left my-3">Product Title</h4>
                            <div class="card-body text-left">
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>

                                <p class="card-text">
                                    Price: £30
                                </p>
                            </div>
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
</main> -->



@endsection