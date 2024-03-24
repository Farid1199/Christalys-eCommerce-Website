@extends('mainLayout.layout')

@section('title', 'Cart List')



@section('content')

<style>
    body {
        background-image: url('{{ asset("Images/HomePage/texture.png") }}');
            background-size: 100%; /* make the image smaller */
            background-color: rgba(255, 215, 0, 0.03);
    }
</style>

<?php
use App\Http\Controllers\ProductController;

$total = ProductController::cartItem();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container py-5" >
  <div class=" text-center"></div>
  <div class="row" >
    <div class="col-md-4 order-md-2 mb-4" >
        <h4 class="d-flex justify-content-between align-items-center mb-3" >
            <span class="text-muted display-10">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{$total}}</span>
        </h4>
        <ul class="list-group mb-3" style="border: 1px solid gold;">
            @foreach($cartItems as $item)
            <li class="list-group-item cart-item">
                <div class="row">
                    <div class="col-5">
                        <a href="detail/{{$item->id}}" style="text-decoration:none;">
                            <h6 class="my-0">{{ Str::limit($item->name, 20, $end = '...') }}</h6>
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


        
        <div class="row">

<a href="{{ route('stripe.checkout', ['price' => 10, 'product' => 'silver'])}}"><button type="button" class="btn btn-warning btn-block btn-lg">Proceed to
    Checkout</button></a>

</div>
    </div>

    

    @php
$index = 0; // Initialize an index variable
    @endphp



    <div class="col-md-8 order-md-1">
      <h2 class="mb-3 display-6">Shopping Cart</h2>

<!-- Add this section for displaying flash messages -->
@if(session('success'))
    <div class="text-center display-8 my-3" style="background-color: green; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 0.5s ease-out forwards;" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="text-center display-8 my-3" style="background-color: #B22222; color: #FFFFFF; padding: 15px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 0.5s ease-out forwards;" role="alert">
        {{ session('error') }}
    </div>
@endif

<style>
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

      @if($cartItems->isEmpty())

      <img class="mx-auto d-block my-4" src="{{ asset('Images\HomePage\Empty-cart.png') }}"
        alt="Generic placeholder image" width="140" height="140" />
      <h4 class="text-center my-3">Your cart is empty</h4>
      @else




      <div class="row">
        @foreach($cartItems as $index => $item)
        <div class="card rounded-3 mb-4 shadow border-lg" style="border: 1px solid gold;">

          <div class="card-body " >
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">



                <img src="{{$item->gallery}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <a href="detail/{{$item->id}}" style="text-decoration:none;">
                  <p class="lead fw-normal mb-2">{{$item->name}}</p>
                </a>
              </div>

          <form action="/add_to_cart" id= "myForm{{ $index }}" method="POST" style="width: 20%;">
              @csrf
              <label for="quantity" class="form-label">Quantity:</label>
              <input type="number" id="quantity{{ $index }}" name="quantity" value="{{$item->quantity}}" min="1" class="form-control mb-3 border border-1 border-dark" style="width: 100%;">
              <input type="hidden" value="{{$item->product_id}}" name="product_id">
              <input type="hidden" value="{{$item->cart_id}}" name="cart_item_id">
            </form>

           



              
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

        <script>
          // Get the input field
          var inputField = document.getElementById('quantity{{ $index }}');
         
          // Add event listener for input change
          inputField.addEventListener('input', function() {
            // Submit the form
            document.getElementById('myForm{{ $index }}').submit();
          });
        </script>

        @php
    $index++; // Increment the index for the next iteration
        @endphp
        @endforeach

        
      




      <form action="{{ route('cart.removeAll') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-block btn-danger py-2 mb-2 btn-lg" style="background-color: #ff3e3e; color: white;"> Remove All Items</button>
                          </form>


      @endif

    </div>




  </div>



</div>







@endsection











