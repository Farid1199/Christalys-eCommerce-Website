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

        @foreach($cartItems as $item)

        <li class="list-group-item d-flex justify-content-between lh-condensed">


          <div>
            <a href="detail/{{$item->id}}" style="text-decoration:none;">
              <h6 class="my-0">{{$item->name}}</h6>
            </a>
          </div>
          <span class="text-muted">Q:{{$item->quantity}}</span>
          <span class="text-muted">Total amount: £{{$item->total_amount}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <span class="text-muted">Total Price:£{{$totalPrice}}</span>

        </li>

        @endforeach




      </ul>

    </div>

    @php
$index = 0; // Initialize an index variable
    @endphp



    <div class="col-md-8 order-md-1">
      <h2 class="mb-3">Shopping Cart</h2>

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if($cartItems->isEmpty())

      <img class="mx-auto d-block my-4" src="{{ asset('Images\HomePage\Empty-cart.png') }}"
        alt="Generic placeholder image" width="140" height="140" />
      <h4 class="text-center my-3">Your cart is empty</h4>
      @else




      <div class="row">
        @foreach($cartItems as $item)
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
                <h5 class="mb-0">£{{$item->price}}</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
               
                 
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

        
       

<div class="row">
  <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Total Price</span>
          <span class="badge badge-secondary badge-pill">£{{$totalPrice}}</span>
      </h4>
  </div>
</div>

      </div>
      <div class="row">
        <div class="col-md-12">
            <h4>Total Price: £{{ $totalPrice }}</h4>
        </div>
    </div>
  


      <div class="row">

        <a href="{{ route('stripe.checkout', ['price' => 10, 'product' => 'silver'])}}"><button type="button" class="btn btn-primary btn-block btn-lg">Proceed to
            Checkout</button></a>

      </div>

      @endif

    </div>




  </div>



</div>







@endsection











