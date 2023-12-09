@extends('mainLayout.layout')

@section('title', 'Cart List')

@section('content')


<div class="container mt-5">
    <h2>Previous Orders</h2>

    <!-- Table to display multiple orders -->
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Tracking ID</th>
                <th>Date</th>
                <th>Total Amount</th>
                <th>Products</th>

            </tr>
        </thead>
        <tbody>
            <!-- Placeholder for each order row -->
            <tr>
                <td>[ORDER_ID_1]</td>
                <td>[TRACKING_DATE_1]</td>
                <td>[ORDER_DATE_1]</td>
                <td>[ORDER_AMOUNT_1]</td>
                <td>
                    <!-- Placeholder for product list in the order -->
                    <ul>
                        <li>[PRODUCT_NAME_1_1] - Quantity: [QUANTITY_1_1]</li>
                        <li>[PRODUCT_NAME_1_2] - Quantity: [QUANTITY_1_2]</li>
                        <!-- Add more placeholders for other products in the order -->
                    </ul>
                </td>
            </tr>
            <!-- Add more rows for other orders -->
        </tbody>
    </table>
</div>









@endsection