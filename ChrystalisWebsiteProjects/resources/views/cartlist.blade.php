@extends('mainLayout.layout')

@section('title', 'Cart List')



@section('content')

<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>

<div class="container py-5">
  <div class="py-5 text-center"></div>



  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{$total}}</span>
      </h4>
      <ul class="list-group mb-3">

        @foreach($products as $item)

        <li class="list-group-item d-flex justify-content-between lh-condensed">


          <div>
            <a href="detail/{{$item->id}}" style="text-decoration:none;">
              <h6 class="my-0">{{$item->name}}</h6>
            </a>
          </div>
          <span class="text-muted">{{$item->price}}</span>
        </li>

        @endforeach


        <li class="list-group-item d-flex justify-content-between lh-condensed">

        </li>

      </ul>

    </div>

    @php
    $index = 0; // Initialize an index variable
    @endphp



    <div class="col-md-8 order-md-1">
      <h2 class="mb-3">Shopping Cart</h2>

      @if($products->isEmpty())
      <h4 class="text-center my-3">Your cart is empty</h4>
      @else




      <div class="row">
        @foreach($products as $item)
        <div class="card rounded-3 mb-4">

          <div class="card-body">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">



                <img src="{{$item->gallery}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <a href="detail/{{$item->id}}" style="text-decoration:none;">
                  <p class="lead fw-normal mb-2">{{$item->name}}</p>
                </a>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">{{$item->price}}</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <!--a href="{{ url('removeCart', ['id' => $remove[$index]->id]) }}">
                  <img src="{{ asset('Images\HomePage\cart-remove.png') }}" class="img-fluid">
                </a-->


                <form action="{{ route('cart.remove', ['id' => $item->cart_id]) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn-danger" style="  border: none;
                  cursor: pointer;
                  appearance: none;
                  background-color: inherit;
                  margin: 0;
                  padding: 0;">
                    <img type="submit" src="{{ asset('Images\HomePage\cart-remove.png') }}" class="img-fluid"></button>
                </form>
              </div>


            </div>
          </div>

        </div>

        @php
        $index++; // Increment the index for the next iteration
        @endphp
        @endforeach

      </div>


      <div class="row">

        <a href="{{ route('checkout')}}"><button type="button" class="btn btn-primary btn-block btn-lg">Proceed to
            Checkout</button></a>

      </div>

      @endif

    </div>




  </div>



</div>







@endsection






























<!--

=================================================================
              Bellow not needed
    -- =================================================================--

Previous CODE --




<div class="col-sm-10">

    Ecartlist.blade.php 

   <div class="trending-wrapper">

       <h4>Result for Products</h4>

       @foreach($products as $item)

       <div class="row searched-item">

           <div class="col-sm-3">

               <a href="detail/{{$item->id}}">

                   <img class="trending-image" src="{{$item->gallery}}">

               </a>

           </div>

           <div class="col-sm-3">

               <div>

                   <h2>{{$item->name}}</h2>

                   <h5>{{$item->description}}</h5>

               </div>

                Missing closing tag? Assuming it's meant to be </a> 

           </div>

           <div class="col-sm-3">

               <a href="detail/{{$item->id}}">

                   <img class="trending-image" src="{{$item->gallery}}">

                   <div>

                       <h2>{{$item->name}}</h2>

                       <h5>{{$item->description}}</h5>

                   </div>

               </a>

           </div>

           <div class="col-sm-3">

               <button> Button content here </button>

           </div>

       </div>

       @endforeach

   </div>

</div>


-->