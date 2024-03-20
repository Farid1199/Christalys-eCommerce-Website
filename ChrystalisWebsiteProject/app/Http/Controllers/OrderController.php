<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Order;
use Illuminate\Support\Facades\Redirect;
class OrderController extends Controller
{
    //

    public function requestReturn(Request $request, $orderId)
{
    $order = Order::findOrFail($orderId);

    // Ensure the authenticated user owns the order
    if ($order->user_id !== auth()->id()) {
        abort(403);
    }

    // Update order to mark as returned
    $order->update(['process' => 'Returned']);

    return redirect()->back()->with('success', 'Return requested successfully.');
}
public function myReturns($order)
{

    $returnedOrders = Order::where('user_id', $order)
                           ->where('process', 'Received')
                           ->first();
        $returnedOrders->process = "Returnning";
        $returnedOrders->save();
    

    return Redirect::route('previousOrders');
}

// OrderController.php


public function __construct()
{
    $this->middleware('auth');
}
public function returnOrder(Request $request, $orderId)
{


    $order = Order::findOrFail($orderId);
    if ($order->user_id != auth()->id()) {
        abort(403, 'Unauthorized action.');
    }
    $order->process = 'Returned';
    $order->save();

    // Redirect back with a success message, or to a specific route
    return Redirect::route('previousOrders');;


}









}