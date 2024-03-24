@extends('mainLayout.layout2')

@section('title', 'Full Catalogue')

@section('content')

<style>
  
</style>

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css')}}" />

<!-----------------------------
    MAIN CONTENT
-------------------------------->


<style>
                #bg {
            background-image: url('{{ asset("Images/HomePage/texture.png") }}');
            background-size: 100%; /* make the image smaller */
        }

        .album {
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        background-color: rgba(255, 255, 255, 0.2);
    }

            </style>

<div class="album bg-light py-5" id="bg">
    <div class="container py-5" >



        <div class="row">
            <!-- Search Filters Column -->
            <div class="col-md-4">
                <div class="card sticky-sm-top mt-4" style="border:3px solid gold">
                    <div class="card-body">



                    <h3 class="card-title text-center mb-2">Search & Sort Filters</h3>
                    <!-- Search form for category -->
                    <form>

                    <label for="category">Search Bar</label>
                            <div class="d-flex mb-2 mb-lg-0" style="width: 100%;">
                                <input class="form-control border border-1 border-dark" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}" style="width: 100%;" />
                                
                            </div>
                        <div class="form-group mt-2">
                            <label for="category">Search by Category</label>
                            <select class="form-control border border-1 border-dark" id="category" name="category" value="{{ request('category') }}">
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
                            <input type="number" class="form-control border border-1 border-dark" id="min_price" name="min_price"
                                placeholder="Min Price" value="{{ request('min_price') }}">
                            <input type="number" class="form-control border border-1 border-dark mt-1" id="max_price" name="max_price"
                                placeholder="Max Price" value="{{ request('max_price') }}">
                        </div>

                        <div class="form-group" style="width: 100%;">
                        <label for="min_price">Sort Filters</label>
                                <select class="form-control border border-1 border-dark" id="sort" name="sort" value="{{ request('sort') }}" width= "100%">
                                    <option disabled selected>-- Select Sort Type --</option>
                                    <option value="name_asc">Name (Ascending)</option>
                                    <option value="name_desc">Name (Descending)</option>
                                    <option value="price_asc">Price (Low-to-High)</option>
                                    <option value="price_desc">Price (High-to-Low)</option>
                                </select>
                            </div>

                        <div class="form-group mt-5 text-center">
                            <button class="btn btn-secondary text-center" type="submit" >Apply Filters</button>
                            <button class="btn btn-outline-secondary ml-4" value="{{ request('reset_filters') }} ">Reset Filters</button>
                        </div>
                
                    </form>
                    </div>
                </div>
            </div>


            <!-- Products Column -->
            <div class="col-md-8">
                <div class="py-3 text-center">
                    <!-- Flash messages -->
@if(session('success'))
    <div class="text-center display-8 my-3" style="background-color: green; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 0.5s ease-out forwards;" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="text-center display-8 my-3" style="background-color: #B22222; color: #FFFFFF; padding: 15px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 0.5s ease-out forwards;" role="alert">
        {{ session('error') }}
    </div>
@endif

<style>
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
                </div>


                <div class="col-md-12 ">
                                @foreach ($products as $ring)
                                <div class="card mb-4 box-shadow" style="border-radius: 10px; overflow: hidden; transition: transform .3s ease; border:3px solid gold">
                                <div class="row g-0 d-flex align-items-center justify-content-center" >
                                        <div class="col-md-4 d-flex align-items-center justify-content-center" style="background: #f8f9fa; border:1px solid grey; border-radius: 7px;">
                                        <a href="detail/{{$ring['id']}}" class="d-block w-100 h-100">
                                        <img src="{{ $ring['gallery'] }}" class="card-img-center img-responsive img-fluid" alt="Card image cap" style="object-fit: cover; height: 250px; min-width: 100%; border-radius: 10px;" />
                                        </a>
                                        </div>
                                        <div class="col-md-8 align-items-center justify-content-center d-flex flex-column "> 
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $ring->name }}</h4>
                                                <p class="card-text">{{ Str::limit($ring->description, $limit = 100, $end = '...') }}</p>
                                                <p class="card-text font-weight-bold">Price: £{{ $ring->price }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <form action="detail/{{$ring['id']}}" method="GET">
                                                        @csrf
                                                        <button class="btn btn-outline-dark" type="submit">View</button>
                                                    </form>

                                                    <form action="/add_to_wishlist" method="POST">
                                                        @csrf
                                                        <button class="btn btn-outline-secondary" type="submit">Add to Wishlist</button>
                                                        <input type="hidden" value="{{$ring->id}}" name="product_id">
                                                    </form>

                                                    <form action="/add_to_cart" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$ring['id']}}">
                                                        <button class="btn btn-warning" type="submit">Add to Cart</button>
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
