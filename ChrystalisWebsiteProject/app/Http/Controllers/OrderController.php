<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Order;

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
public function myReturns()
{
    $returnedOrders = Order::where('user_id', auth()->id())
                           ->where('process', 'Returned')
                           ->get();

    return view('orders.returned', compact('returnedOrders'));
}


}
