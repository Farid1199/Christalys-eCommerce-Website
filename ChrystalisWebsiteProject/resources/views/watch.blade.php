@extends('mainLayout.layout')

@section('title', 'Watch')


@section('content')

<h1>Watches</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        @foreach ($products as $watch)
            <div class="item {{ $watch['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$watch['id']}}">
                    <img class="card-img-top" src="{{ $watch['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $watch->name }}</h3>
                        <p>{{ $watch->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>



@endsection