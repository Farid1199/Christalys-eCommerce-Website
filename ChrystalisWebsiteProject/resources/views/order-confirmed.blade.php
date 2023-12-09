@extends('mainLayout.layout')

@section('title', 'Cart List')

@section('content')



<div class="container mt-5 py-3">
    <h1 class="mt-5 py-3 text-center">Order Confirmed</h1>
    <p>Thank you for your order! Your order has been successfully placed.</p>
    <p>Your order number is: <strong id="orderNumber"></strong></p>
    <p>Your tracking number is: <strong id="trackingNumber"></strong></p>
    <p>An email confirmation has been sent to your registered email address.</p>
    <p>Estimated delivery time: 3-5 business days.</p>
    <p>For any inquiries, please contact our customer support:</p>
    <a href="{{route('contactus')}}"> Customer Support </a>

    <a class="btn btn-primary btn-lg btn-block my-4" href="{{route('previousod')}}">Order History</a>
</div>

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