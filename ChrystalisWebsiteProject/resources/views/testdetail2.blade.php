@extends('mainLayout.layout')

@section('title', 'rings')


@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/contactus.css')}}" />


<hr class="my-5" />

<section id="product-details" class="container mt-4" style="padding-top:20px;">
    <!-- Product 1 -->
    <div class="seperate Watches">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner" style="width:100%; height:100%;">
                <div class="carousel-item active">
                    <img src="https://www.michaeljonesjeweller.co.uk/cdn/shop/products/WBP1112.FT6199_1296x.jpg?v=1681821780"
                        alt="Watch 1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.robertgatwardjewellers.co.uk/cdn/shop/products/wbp1112-ft6199-thumb.jpg?crop=center&height=2048&v=1678193792&width=1200"
                        alt="Watch 2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.robertgatwardjewellers.co.uk/cdn/shop/products/wbp1112-ft6199-thumb4.jpg?crop=center&height=2048&v=1678193792&width=1200"
                        alt="Watch 3" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.robertgatwardjewellers.co.uk/cdn/shop/products/wbp1112-ft6199-thumb3.jpg?crop=center&height=2048&v=1678193792&width=1200"
                        alt="Watch 4" class="d-block w-100">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="watchesSeperate">
            <h2>TAG HEUER Aquaracer Professional 40mm 200m Solargraph Quartz Watch WBP1112.FT6199</h2>
            <p>The TAG Heuer Aquaracer Professional 200 Solargraph is a new take on a watch made for the outdoors. The
                first-ever solar-powered TAG Heuer integrates the innovative Solargraph module to harness the sun’s
                limitless energy. </p>

            <p><b>Price: £2,700.00</b></p>

            <button class="btn btn-success" id="addToCartBtn">Add to Cart</button>
        </div>
    </div>



</section>


<hr class="my-5" />

@endsection