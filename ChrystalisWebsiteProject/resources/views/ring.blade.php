@extends('mainLayout.layout')

@section('title', 'Ring')

@section('content')

<h1>Rings</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        @foreach ($products as $ring)
            <div class="item {{ $ring['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$ring['id']}}">
                    <img class="card-img-top" src="{{ $ring['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $ring->name }}</h3>
                        <p>{{ $ring->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>

@endsection
