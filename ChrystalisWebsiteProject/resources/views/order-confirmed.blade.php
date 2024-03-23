@extends('mainLayout.layout')

@section('title', 'Receipt')

@section('content')

<hr class="mb-3">

<section class="h-100 gradient-custom mt-5">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h5 class="text-muted mb-0">Thanks for your Order, <span class="text-dark">{{
    Auth::user()->name }}</span>!
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0">Receipt</p>
                        </div>


                        <div class="card shadow-0 border mb-4">
                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0">Order Status: <strong>{{ $order->process }}</strong></p>
                                </div>
                                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                        <p class="mb-0">Track Order</p>
                                    </div>
                                    <div class="col-md-10">

                                        @switch($order->process)
                                            @case('Received')
                                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 0%; border-radius: 16px; background-color: #000;"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-around mb-1">
                                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Your order has been received to be processed</p>
                                                    </div>
                                                @break
                                            @case('Processing')
                                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 25%; border-radius: 16px; background-color: #000;"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-around mb-1">
                                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Your order is being processed. Estimated delivery time: 3-5
                                                            business days</p>
                                                    </div>
                                                @break
                                            @case('Dispatched')
                                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 60%; border-radius: 16px; background-color: #000;"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-around mb-1">
                                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Your order is on the way - Expected delivery by today evening</p>
                                                    </div>
                                                @break
                                            @case('Delivered')
                                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 100%; border-radius: 16px; background-color: #000;"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-around mb-1">
                                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Your order has been successfully delivered</p>
                                                    </div>
                                                @break
                                            @case('Returned')
                                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 0%; border-radius: 16px; background-color: #000;"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-around mb-1">
                                                        <p class="mt-1 mb-0 small ms-xl-5">You have returned your order</p>
                                                    </div>
                                                @break                                          
                                        @endswitch

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <p class="fw-bold mb-0">Order Details</p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span>£{{ $order->total_price }}</p>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <p class="text-muted mb-0">Order Number: <strong>{{ $order->created_at }}</strong></p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0">Session ID number: <strong>{{ $order->session_id }}</strong></p>
                        </div>


                        <hr class="my-2 mt-3">
                        <div class="d-flex justify-content-between my-2">
                            <p class="text-muted mb-0">An email confirmation has been sent to your registered email
                                address</p>
                        </div>

                        <div class="d-flex justify-content-between ">
                            <p>For any inquiries, please contact our customer support:</p>



                            <form action="{{route('contactus')}}" method="GET">
                                @csrf

                                <button class="btn btn-secondary" type="submit">Customer Support</button>
                            </form>


                        </div>
                        <hr class="my-2">
                        
                        <a class="btn btn-secondary btn-xl btn-block mt-3 my-3" href="{{route('previousOrders')}}">Order
                            History</a>

                    </div>
                    <div class="card-footer border-0 px-4 py-3 bg-light"
                        style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-dark text-uppercase mb-0">Total
                            paid: <span class="h2 mb-0 ms-2">£{{ $order->total_price }}</span></h5>
                    </div>
                </div>


                @switch($order->process)
                    @case('Received')
                        <div class="text-center mt-4">
                            <p>If you are you want to cancel the transaction, press the cancel button below</p>
                            <form action="{{ route('orders.myReturns', $order) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Cancel Order</button>
                            </form>
                        </div>
                        @break
                    @case('Processing')
                    <div class="text-center mt-4">
                        <p>If you are you want to cancel the transaction, press the cancel button below</p>
                        <form action="{{ route('orders.myReturns', $order) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Cancel Order</button>
                        </form>
                    </div>
                        @break
                    @case('Dispatched')
                        <div class="text-center mt-4">
                            <p>If you are you want to return the order, press the Return Order Below</p>
                            <form action="{{ route('orders.myReturns', $order) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Return Order</button>
                            </form>
                        </div>
                        @break
                    @case('Delivered')
                    <div class="text-center mt-4">
                        <p>If you are you want to return the order, press the Return Order Below</p>
                        <form action="{{ route('orders.myReturns', $order) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">Return Order</button>
                        </form>
                    </div>
                        @break
                    @case('Returned')
                    <div class="text-center mt-4">
                        <p>You have successfully returned your order!</p>
                    
                    </div>
                        @break
                @endswitch
            </div>
        </div>
    </div>
</section>















<script>
    function generateRandomString(length) {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return Array.from({ length }, () => characters[Math.floor(Math.random() * characters.length)]).join('');
    }

    function generateOrderNumber() {
        return generateRandomString(4) + Math.floor(100 + Math.random() * 900);
    }

    function generateTrackingNumber() {
        return generateRandomString(4) + Math.floor(100 + Math.random() * 900);
    }

    // Display the generated order and tracking numbers
    document.getElementById('orderNumber').textContent = generateOrderNumber();
    document.getElementById('trackingNumber').textContent = generateTrackingNumber();
</script>













@endsection