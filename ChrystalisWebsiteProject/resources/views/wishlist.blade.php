@extends('mainLayout.layout')

@section('title', 'Wishlist')

@section('content')

<style>
    body {
        background-image: url('{{ asset("Images/HomePage/texture.png") }}');
        background-size: 100%; /* make the image smaller */
    }

    .album {
        background-color: #f8f9fa; /* Slightly lighter grey to contrast against the body */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card {
        background-color: #ffffff; /* White background */
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adding shadow for depth */
        height: 100%; /* Ensuring equal height */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Aligns content and actions to top and bottom */
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
<hr class="my-2">

<div class="container py-5">

<div class="container mb-3">
                        <h2 class="display-6 font-weight-bold">Your Wishlist</h2>
                    </div>
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

    <div class="row">
        @foreach($wishlistItems as $item)
        <div class="col-md-3 mb-4">
            <div class="card" style="border: 1px solid gold">
                <a href="/detail/{{$item->product->id}}"><img src="{{ $item->product->gallery }}" class="card-img-top" alt="{{ $item->product->name }}"></a>
                <div class="card-body">
                    <h5 class="card-title"><a href="/detail/{{$item->product->id}}">{{ $item->product->name }}</a></h5>
                    <p class="card-text">Price: £{{ $item->product->price }}</p>
                    <div class="row">
                        <div class="col-md-6">
                        <form action="detail/{{$item['id']}}" method="GET">
                                                        @csrf
                                                        <button class="btn btn-outline-dark" type="submit">View Product</button>
                                                    </form>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('wishlist.remove', $item->id) }}" method="POST" class="text-center">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
