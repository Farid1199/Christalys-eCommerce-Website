@extends('mainLayout.layout')

@section('title', 'Wishlist')

@section('content')

<div class="container py-5">
    <h1>Wishlist</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @foreach($wishlistItems as $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $item->product->gallery }}" class="card-img-top" alt="{{ $item->product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->product->name }}</h5>
                    <p class="card-text">{{ $item->product->description }}</p>
                    <form action="{{ route('wishlist.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove from Wishlist</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection