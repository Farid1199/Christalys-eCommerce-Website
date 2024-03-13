@extends('mainLayout.layout2')

@section('title', 'Full Catalogue')

@section('content')

<style>
    body {
        background-color: #e9ecef; /* Slightly darker grey for the overall background */
    }

    .album {
        background-color: #f8f9fa; /* Slightly lighter grey to contrast against the body */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card {
        background-color: #dee2e6; /* Grey card background for better content readability */
        border: none;
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-grey {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-grey:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }

    .form-control {
        border-radius: 0.25rem;
    }

    .sticky-top {
        top: 0;
        z-index: 1020;
    }
</style>

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<div class="album bg-light py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Search Filters Column -->
            <div class="col-md-3">
                <div class="card sticky-top mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Search Filters</h5>
                        <form>
                            <div class="form-group">
                                <label for="category">Search by Category</label>
                                <select class="form-control" id="category" name="category" value="{{ request('category') }}">
                                    <option value="all" disabled selected>-- Select Category --</option>
                                    <option value="Ring">Rings</option>
                                    <option value="Necklace">Necklaces</option>
                                    <option value="Bracelet">Bracelets</option>
                                    <option value="Earring">Earrings</option>
                                    <option value="Watch">Watches</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="min_price">Search by Price</label>
                                <input type="number" class="form-control" id="min_price" name="min_price" placeholder="Min Price" value="{{ request('min_price') }}">
                                <input type="number" class="form-control" id="max_price" name="max_price" placeholder="Max Price" value="{{ request('max_price') }}">
                            </div>
                            <div class="form-group mt-5 text-center">
                                <button class="btn btn-outline-secondary" type="submit">Apply Filters</button>
                                <button class="btn btn-secondary ml-2" type="reset">Reset Filters</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Products Column -->
            <div class="col-md-9">
                <div class="py-3 text-center"></div>
                <div class="col">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="card mb-4 box-shadow">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <img class="card-img-center img-fluid img-responsive" src="{{ $product['gallery'] }}" style="width: 250px; height: 250px;" alt="Card image cap" />
                                </div>
                                <div class="col-8">
                                    <div class="card-body text-left">
                                        <h4 class="text-left my-3">{{ $product->name }}</h4>
                                        <p class="card-text">{{ $product->description }}</p>
                                        <p class="card-text font-weight-bold">Price: £{{ $product->price }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <form action="detail/{{ $product['id'] }}" method="GET">
                                                @csrf
                                                <button class="btn btn-outline-secondary" type="submit">View</button>
                                            </form>
                                            <form action="/add_to_cart" method="POST" class="ml-auto">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                                <button class="btn btn-grey" type="submit">Add to Cart</button>
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
</div>

@endsection
