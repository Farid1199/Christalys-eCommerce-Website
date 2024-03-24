@extends('mainLayout.layout2')

@section('title', 'Wishlist')

@section('content')



<link rel="stylesheet" href="{{ asset('assets/css/css-pages/style.css') }}" />

<div class="album bg-light py-5" style="background-image: url('{{ asset("Images/HomePage/texture.png") }}'); background-size: cover;">
    <div class="container py-5">
        <div class="row">
            @foreach ($wishlistItems as $item)
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card mb-4 box-shadow">
                    <a href="/detail/{{$item->product->id}}" class="d-block w-100 h-100">
                        <img src="{{ $item->product->gallery }}" class="card-img-top" alt="{{ $item->product->name }}">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $item->product->name }}</h5>
                        <p class="card-text">Price: £{{ $item->product->price }}</p>
                        <div class="mt-auto">
                            <form action="{{ route('wishlist.remove', $item->id) }}" method="POST" class="text-center">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Remove from Wishlist</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
