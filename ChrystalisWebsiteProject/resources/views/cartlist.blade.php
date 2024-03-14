@extends('mainLayout.layout')

@section('title', 'Cart List')



@section('content')

<style>
    body {
        background-color: #e9ecef; /* Slightly darker grey for the overall background */
    }

    .album {
        background-color: #f8f9fa; /* Slightly lighter grey to contrast against the body */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card {
        background-color: #dee2e6; /* Grey card background for better content readability */
        border: none;
    }

    .btn-outline-secondary, .btn-grey, .btn-outline-grey {
        color: #6c757d; /* Adjusting for consistency */
        border-color: #6c757d; /* Grey border for buttons */
    }

    .btn-outline-secondary:hover, .btn-grey:hover, .btn-outline-grey:hover {
        color: #fff; /* White text on hover */
        background-color: #5a6268; /* Darker grey background on hover */
        border-color: #545b62; /* Darker grey border on hover */
    }

    .btn-success, .btn-primary {
        background-color: #6c757d; /* Adjusting primary and success buttons to match grey scheme */
        border-color: #6c757d; /* Consistent border color */
    }

    .btn-success:hover, .btn-primary:hover {
        background-color: #5a6268; /* Darker grey on hover */
        border-color: #545b62; /* Darker border color on hover */
    }

    .form-control {
        border-radius: 0.25rem;
    }

    .sticky-sm-top {
        top: 0;
        z-index: 1020;
    }
</style>

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
            <li class="list-group-item cart-item">
                <div class="row">
                    <div class="col-5">
                        <a href="detail/{{$item->id}}" style="text-decoration:none;">
                            <h6 class="my-0">{{$item->name}}</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center">
                        <div>
                            <span class="text-muted">Q: {{$item->quantity}}</span>
                        </div>
                    </div>
                    <div class="col-4 text-right">
                        <div>
                            <span class="text-muted">Total: £{{$item->total_amount}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </li>

            <li class="list-group-item cart-item bg-light border">
                <div class="row">
                    <div class="col-6 text-left">
                        <div>
                            <span class="text-dark">Total Amount:</span>
                        </div>
                    </div> 
                    <div class="col-6 text-right">
                        <div>
                            <span class="text-dark"> £{{$totalPrice}}</span>
                        </div>
                    </div> 
                </div>
            </li>
            
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

        
       
    <div class="container ">

      <div class="row ">

        <div class="card rounded-3 mb-4 bg-light">

          <div class="card-body bg-light">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-sm text-left">

                <h4 class="d-flex justify-content-between align-items-center ">
                  <span class="mb-0">Total Price:</span>
                </h4>
                
              </div>

              <div class="col-sm text-right">

                <h3 class="align-items-center ">
                  <span class="mb-0">£{{$totalPrice}}</span>
                </h3>

              </div>

            </div>
          </div>

        </div>

      </div>
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











