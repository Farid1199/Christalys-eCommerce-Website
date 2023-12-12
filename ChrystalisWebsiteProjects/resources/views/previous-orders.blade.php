@extends('mainLayout.layout')

@section('title', 'Previous Orders')

@section('content')


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