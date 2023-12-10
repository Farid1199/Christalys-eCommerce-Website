@extends('mainLayout.layout')

@section('title', 'Cart List')

@section('content')



<div class="container mt-5 py-3">
    <h1 class="mt-5 py-3 text-center">Order Confirmed</h1>
    <p>Thank you for your order! Your order has been successfully placed.</p>
    <!--p>Your order number is: <strong id="orderNumber"></strong></p>
    <p>Your tracking number is: <strong id="trackingNumber"></strong></p-->
    <p>An email confirmation has been sent to your registered email address.</p>
    <p>Estimated delivery time: 3-5 business days.</p>
    <p>For any inquiries, please contact our customer support:</p>
    <a href="{{route('contactus')}}"> Customer Support </a>
</div>




<section class="h-100 gradient-custom">
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
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                                            class="img-fluid" alt="Phone">
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0">iPad</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 small">Pink rose</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 small">Capacity: 32GB</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 small">Qty: 1</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 small">$399</p>
                                    </div>
                                </div>
                                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                        <p class="text-muted mb-0 small">Track Order</p>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="progress" style="height: 6px; border-radius: 16px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 20%; border-radius: 16px; background-color: #a8729a;"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-around mb-1">
                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <p class="fw-bold mb-0">Order Details</p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $898.00</p>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <p class="text-muted mb-0">Order Number: <strong id="orderNumber"></strong></p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0">Tracking number: <strong id="trackingNumber"></strong></p>
                        </div>

                    </div>
                    <div class="card-footer border-0 px-4 py-5"
                        style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                            paid: <span class="h2 mb-0 ms-2">total</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn btn-primary btn-xl btn-block my-4" href="{{route('previousod')}}">Order History</a>
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