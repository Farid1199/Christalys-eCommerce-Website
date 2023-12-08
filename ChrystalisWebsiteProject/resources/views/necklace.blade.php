@extends('mainLayout.layout')

@section('title', 'Necklace')


@section('content')

<h1>Necklace</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        @foreach ($products as $necklace)
            <div class="item {{ $necklace['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$necklace['id']}}">
                    <img class="card-img-top" src="{{ $necklace['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $necklace->name }}</h3>
                        <p>{{ $necklace->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>


@endsection
