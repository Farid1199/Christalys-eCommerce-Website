@extends('mainLayout.layout')

@section('title', 'Bracelets')



@section('content')

<h1>Bracelet</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        @foreach ($products as $bracelet)
            <div class="item {{ $bracelet['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$bracelet['id']}}">
                    <img class="card-img-top" src="{{ $bracelet['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $bracelet->name }}</h3>
                        <p>{{ $bracelet->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>

        


@endsection
