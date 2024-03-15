@extends('mainLayout.layout')

@section('title', 'Previous Orders')

@section('content')
<style>/* General table styling */
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
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.table tbody tr td {
    vertical-align: middle;
    padding: 15px;
    border-top: solid 2px transparent; /* Prevents borders from colliding */
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

<hr class="my-5">
<hr class="my-5">



<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead>
                            <!-- Table to display multiple orders -->
                            <tr>
                                <th class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </th>
                                <th>Order ID</th>
                                <th>Tracking ID</th>
                                <th>Date</th>
                                <th>Total Amount</th>
                                <th>Progress</th>
                                <th>Products</th>

                                <th></th>
                            </tr>
                        </thead>
                        <!-- Placeholder for each order row -->
                        <tbody class="table-body">
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>NUZN150</td>
                                <td>JUSQ830</td>
                                <td>10/12/2023</td>
                                <td>£300</td>
                                <td><span class="badge badge-success">Fullfilled</span></td>
                                <td>1x Gold Ring</td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>HBGN144</td>
                                <td>MSCG627</td>
                                <td>18/05/2023</td>
                                <td>£800</td>
                                <td><span class="badge badge-info">Confirmed</span></td>
                                <td>2x Gold Bracelets, 3x Gold Earrings </td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>
                            <tr class="cell-1">
                                <td class="text-center">
                                    <div class="toggle-btn">
                                        <div class="inner-circle"></div>
                                    </div>
                                </td>
                                <td>KBSNBS9</td>
                                <td>JHSJ07H</td>
                                <td>08/05/2023</td>
                                <td>£900</td>
                                <td><span class="badge badge-danger">Order Cancelled</span></td>
                                <td>2x Sapphire earrings, 1x Diamond necklace</td>
                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection