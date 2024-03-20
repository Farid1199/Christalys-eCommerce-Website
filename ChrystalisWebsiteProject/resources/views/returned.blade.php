@extends('layouts.app')

@section('title', 'My Returned Orders')

@section('content')
<div class="container">
    <h2>My Returned Orders</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Total Amount</th>
                <th>Order Status</th>
                <th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($returnedOrders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>£{{ number_format($order->total_price, 2) }}</td>
                    <td>{{ $order->process }}</td>
                    <td>{{ $order->updated_at->format('Y-m-d') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No returned orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
