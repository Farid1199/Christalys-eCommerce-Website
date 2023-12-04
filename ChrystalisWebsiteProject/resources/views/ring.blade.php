@extends('mainLayout.layout')

@section('title', 'Ring')



@section('content')

  <main>
      <!-- Ring 1 -->
      <section class="product-container">
        @foreach ($rings as $item)
            
                <div class="item {{ $item->id == 1 ? 'active' : '' }}">
                    <a href="{{ route('rings.detail', ['id' => $item->id]) }}">
                    <img class="card-img-top" src="{{$item['gallery']}}">
                    <div class="product-info">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
                </div>
                @endforeach
      </section>
 
      

      <!-- Add more rings following the same structure -->

            
          
 
    </main>


@endsection


