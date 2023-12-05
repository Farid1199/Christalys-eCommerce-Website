@extends('mainLayout.layout')

@section('title', 'Earring')



@section('content')

<h1>Earring</h1>
<main>
    <!-- Ring 1 -->
    <section class="product-container">
        @foreach ($products as $earring)
            <div class="item {{ $earring['id'] == 1 ? 'active' : '' }}">
                <a href="detail/{{$earring['id']}}">
                    <img class="card-img-top" src="{{ $earring['gallery'] }}">
                    <div class="product-info">
                        <h3>{{ $earring->name }}</h3>
                        <p>{{ $earring->description }}</p>
                    </div>
                  </a>
            </div>
        @endforeach
    </section>
</main>

@endsection
        