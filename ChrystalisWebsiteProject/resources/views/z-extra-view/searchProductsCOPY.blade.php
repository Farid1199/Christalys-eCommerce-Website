@extends('mainLayout.layout2')

@section('title', 'Full Catalogue')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<!-----------------------------
    MAIN CONTENT
-------------------------------->

<div class="album bg-light py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Search Filters Column -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Search Filters</h5>
                        <!-- Search form for category -->
                        <form action="{{ route('searchByCategory') }}" method="GET">
                            <div class="form-group">
                                <label for="category">Search by Category</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="">All Categories</option>
                                    <!-- Loop through categories and display options -->
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                        <!-- Search form for price -->
                        <form action="{{ route('searchByPrice') }}" method="GET">
                            <div class="form-group">
                                <label for="min_price">Search by Price</label>
                                <input type="number" class="form-control" id="min_price" name="min_price"
                                    placeholder="Min Price">
                                <input type="number" class="form-control" id="max_price" name="max_price"
                                    placeholder="Max Price">
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                        <!-- Sorting options -->
                        <h5 class="mt-4">Sort By</h5>
                        <a href="{{ route('sortByName') }}" class="btn btn-link">Name</a>
                        <a href="{{ route('sortByPrice') }}" class="btn btn-link">Price</a>
                        <a href="{{ route('sortByAlphabeticalOrder') }}" class="btn btn-link">Alphabetical Order</a>
                        <a href="{{ route('sortByCategory') }}" class="btn btn-link">Category</a>
                    </div>
                </div>
            </div>
            <!-- Products Column -->
            <div class="col-md-9">
                <div class="py-3 text-center"></div>
                <div class="col">
                    <div class="row">
                        @foreach ($products as $bracelet)
                        <div class="card mb-4 box-shadow item{{ $bracelet['id'] == 1 ? 'active' : '' }}">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <img class="card-img-center img-fluid img-responsive"
                                        src="{{ $bracelet['gallery'] }}" style="width: 250px; height: 250px;"
                                        alt="Card image cap" />
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
                                            <form action="detail/{{$bracelet['id']}}" method="GET">
                                                @csrf
                                                <button class="btn btn-outline-primary" id="addToCartBtn"> View
                                                </button>
                                            </form>
                                            <form action="/add_to_wishlist" method="POST">
                                                @csrf
                                                <button class="btn btn-outline-secondary" id="addToCartBtn"> Add to
                                                    Wishlist </button>
                                                <input type="hidden" value="{{$bracelet->id}}" name="product_id"
                                                    id="product_id">
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
</div>
@endsection