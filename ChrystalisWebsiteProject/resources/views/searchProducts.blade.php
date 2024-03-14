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
                <div class="card sticky-sm-top mt-4">
                    <div class="card-body">



                    <h5 class="card-title">Search Filters</h5>
                    <!-- Search form for category -->
                    <form>
                        <div class="form-group">
                            <label for="category">Search by Category</label>
                            <select class="form-control" id="category" name="category" value="{{ request('category') }}">
                                <!-- Loop through categories and display options -->
                                <option value="all" disabled selected>-- Select Category --</option>
                                <option value="Ring">Rings</option>
                                <option value="Necklace">Necklace</option>
                                <option value="Bracelet">Bracelets</option>
                                <option value="Earring">Earrings</option>
                                <option value="Watch">Watches</option>
                                <!-- Add more categories as needed -->
                            </select>
                        </div>


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
                                            Price: £{{ $bracelet->price}}
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
</div>
</div>

<script> 
document.addEventListener('DOMContentLoaded', function() {
    // Get the min_price and max_price input fields
    var minPriceField = document.getElementById('min_price');
    var maxPriceField = document.getElementById('max_price');

    // Clear the min_price and max_price input fields
    minPriceField.value = '';
    maxPriceField.value = '';
});

</script>

@endsection
