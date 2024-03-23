@extends('layouts.app')

@section('title', 'Previous Orders')

@section('content')

<style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.container {
    padding-top: 20px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table thead th {
    background-color: #f8f9fa;
    text-align: left;
    font-weight: 600;
    padding: 12px;
    border-bottom: 2px solid #dee2e6;
}

.table tbody td {
    padding: 15px;
    border-bottom: 1px solid #eee;
}

.table tbody tr:hover {
    background-color: #f2f2f2;
}

.badge {
    display: inline-block;
    padding: 0.5em 0.75em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}

.badge-success {
    background-color: #28a745;
    color: #fff;
}

.badge-danger {
    background-color: #dc3545;
    color: #fff;
}

@media (max-width: 768px) {
    .table thead {
        display: none;
    }

    .table, .table tbody, .table tr, .table td {
        display: block;
        width: 100%;
    }

    .table tr {
        margin-bottom: 15px;
    }

    .table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: bold;
        text-align: left;
    }
}
</style>
<hr class="my-5 py-4"></hr>

<div>
        <h2 class="text-center "> Previous Orders
        </h2>
    </div>


<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Transaction Date & Time</th>
                        <th>Session ID</th>
                        <th>Total Amount</th>
                        <th>Order Status</th>
                        <th>Order Receipt</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($orders as $order)
                    <tr>
                        <td data-label="Order ID">{{ $order->order_id }}</td>
                        <td data-label="Transaction date">{{ $order->created_at }}</td>
                        <td data-label="Session ID">{{ $order->session_id }}</td>
                        <td data-label="Total Amount">£{{ number_format($order->total_price, 2) }}</td>
                        <td data-label="Order Status">
                            @switch($order->process)
                                @case('Received')
                                    <span class="badge badge-primary">Received</span>
                                    @break
                                @case('Processing')
                                    <span class="badge badge-secondary">Processing</span>
                                    @break
                                @case('Dispatched')
                                    <span class="badge badge-warning">Dispatched</span>
                                    @break
                                @case('Delivered')
                                    <span class="badge badge-success">Delivered</span>
                                    @if($order->process === 'Delivered')
                                        <!--form action="{{ route('orders.requestReturn', $order->order_id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Request Return</button>
                                        </form-->
                                    @endif
                                    @break
                                @case('Returned')
                                    <span class="badge badge-danger">Returned</span>
                                    @break
                            @endswitch
                        </td>
                        <td data-label="Info">

                        <span class="badge bg-light">
                            <a href="receipt/{{$order->order_id }}" style="text-decoration: none;">
                                Order Receipt
                            </a>
                        </span>


                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No previous orders found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<hr class="my-3 py-3"></hr>
@endsection