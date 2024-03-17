@extends('layouts.app')

@section('title', 'Previous Orders')

@section('content')

<style>
/* General table styling */
.table {
    border-collapse: separate;
    border-spacing: 0 15px;
    width: 100%;
}

/* Header styling */
thead th {
    font-weight: 600;
    background-color: #f8f9fa;
    border-bottom: solid 2px #dee2e6;
}

/* Row and cell styling */
.table tbody tr {
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.table tbody tr td {
    vertical-align: middle;
    padding: 15px;
    border-top: solid 2px transparent;
}

/* Hover effect for rows */
.table tbody tr:hover {
    background-color: #f2f2f2;
}

/* Styling for badges to make them more rounded and stand out */
.badge {
    padding: 0.5em 0.75em;
    border-radius: 0.25rem;
}

.badge-success {
    background-color: #28a745;
}

.badge-info {
    background-color: #17a2b8;
}

.badge-danger {
    background-color: #dc3545;
}

/* Styling for the ellipsis icon */
.fa-ellipsis-h {
    font-size: 1.25rem;
    cursor: pointer;
}

/* Custom toggle button styling */
.toggle-btn {
    display: inline-block;
    cursor: pointer;
}

.inner-circle {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #6c757d;
    position: relative;
    transition: all 0.3s ease-in-out;
}

.toggle-btn .inner-circle:before {
    content: '';
    position: absolute;
    top: 4px;
    left: 4px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #f8f9fa;
}

/* Styling adjustments for smaller screens */
@media (max-width: 768px) {
    .table {
        border: 0;
    }

    .table thead {
        display: none;
    }

    .table tbody tr {
        display: block;
        margin-bottom: 20px;
    }

    .table tbody tr td {
        display: block;
        text-align: right;
        font-size: 0.85rem;
        border-bottom: 1px dotted #ccc;
    }

    .table tbody tr td:last-child {
        border-bottom: 0;
    }

    .table tbody tr td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
    }
}
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Address ID</th>
                                <th>Session ID</th>
                                <th>Total Amount</th>
                                <th>Paid</th>
                                <th>Products</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                            <tr>
                                <td>{{ $order->order_id }}</td>
                                <td>{{ $order->user_id }}</td>
                                <td>{{ $order->address_id }}</td>
                                <td>{{ $order->session_id }}</td>
                                <td>£{{ number_format($order->total_price, 2) }}</td>
                                <td>{{ $order->paid ? 'Yes' : 'No' }}</td>
                                <td>
                                    <!-- Placeholder for product details -->
                                    N/A
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
    </div>
</div>

@endsection
