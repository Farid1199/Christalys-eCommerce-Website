@extends('mainLayout.layout2')

@section('title', 'Bracelets')

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
    .card-img-center:hover {
    transform: scale(1.05);
    transition: transform .3s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}


    .btn-outline-secondary, .btn-grey, .btn-outline-grey {
        color: #6c757d; /* Adjusting for consistency */
        border-color: #6c757d; /* Grey border for buttons */
    }

    .btn-outline-secondary:hover, .btn-grey:hover, .btn-outline-grey:hover {
        color: #fff; /* White text on hover */
        background-color: #5a6268; /* Darker grey background on hover */
        border-color: #545b62; /* Darker grey border on hover */
    }

    .btn-success, .btn-primary {
        background-color: #6c757d; /* Adjusting primary and success buttons to match grey scheme */
        border-color: #6c757d; /* Consistent border color */
    }

    .btn-success:hover, .btn-primary:hover {
        background-color: #5a6268; /* Darker grey on hover */
        border-color: #545b62; /* Darker border color on hover */
    }

    .form-control {
        border-radius: 0.25rem;
    }

    .sticky-sm-top {
        top: 0;
        z-index: 1020;
    }
</style>

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<div class="album bg-light py-5">
    <div class="container py-5">
        <div class="py-3 text-center"></div>

        <!-- Flash messages -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="row">
            <!-- Search Filters Column -->
            <div class="col-md-4">
                <div class="card sticky-sm-top mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Search & Sort</h5>
                    <!-- Search form for category -->
                    <form>

                    <label for="category">Search Bar</label>
                            <div class="d-flex mb-2 mb-lg-0" style="width: 100%;">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}" style="width: 100%;" />
                                
                            </div>

                        <div class="form-group">
                            <label for="min_price">Search by Price</label>
                            <input type="number" class="form-control" id="min_price" name="min_price"
                                placeholder="Min Price" value="{{ request('min_price') }}">
                            <input type="number" class="form-control" id="max_price" name="max_price"
                                placeholder="Max Price" value="{{ request('max_price') }}">
                        </div>

                        <div class="form-group" style="width: 100%;">
                        <label for="min_price">Sort Filters</label>
                                <select class="form-control" id="sort" name="sort" value="{{ request('sort') }}" width= "100%">
                                    <option disabled selected>-- Select Sort Type --</option>
                                    <option value="name_asc">Name (Ascending)</option>
                                    <option value="name_desc">Name (Descending)</option>
                                    <option value="price_asc">Price (Low-to-High)</option>
                                    <option value="price_desc">Price (High-to-Low)</option>
                                </select>
                            </div>

                        <div class="form-group mt-5 text-center">
                            <button class="btn btn-outline-secondary text-center" type="submit" >Apply Filters</button>
                            <button class="btn btn-outline-secondary ml-4" value="{{ request('reset_filters') }} ">Reset Filters</button>
                        </div>
                
                    </form>
                    </div>
                </div>
            </div>

            <!-- Products Column -->
            <div class="col-md-8">
                @foreach ($products as $bracelet)
                <div class="card mb-4 box-shadow">
                    <div class="row align-items-center">
                        <div class="col text-center">
                        <a href="detail/{{$bracelet['id']}}" style="text-decoration: none;">
                <img class="card-img-center img-fluid img-responsive" src="{{ $bracelet['gallery'] }}" style="width: 250px; height: 250px;" alt="Card image cap" />
            </a>
                        </div>
                        <div class="col-8">
                            <div class="card-body text-left">
                                <h4 class="text-left my-3">{{ $bracelet->name }}</h4>
                                <p class="card-text">{{ $bracelet->description }}</p>
                                <p class="card-text font-weight-bold">Price: £{{ $bracelet->price }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <form action="detail/{{$bracelet['id']}}" method="GET">
                                        @csrf
                                        <button class="btn btn-outline-secondary" type="submit">View</button>
                                    </form>
                                    <form action="/add_to_wishlist" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$bracelet['id']}}">
                                        <button class="btn btn-outline-secondary" type="submit">Add to Wishlist</button>
                                    </form>
                                    <form action="/add_to_cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$bracelet['id']}}">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    var minPriceField = document.getElementById('min_price');
    var maxPriceField = document.getElementById('max_price');
    // Optionally reset fields on page load if needed
    minPriceField.value = '';
    maxPriceField.value = '';
});
</script>

@endsection
