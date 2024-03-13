<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\CartItem;
use Stripe\Customer;


class StripePaymentController extends Controller
{
    //
    public function stripe(): View
    {
        return view('stripe');
    }

    public function stripecheckout(request $request)
    {
        $userId = auth()->id();
        $cartItems = DB::table('cart_items')->where('cart_items.user_id', $userId)->get();
        $totalPrice = $cartItems->sum('total_amount');
        


        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $reDirectUrl = route('stripe.checkout.success').'?session_id={CHECKOUT_SESSION_ID}';
        $cart_items = CartItem::with('product')->where('user_id', auth()->user()->id)->get();
        $lineItems = [];

        $customer = Customer::create([
 
            'email' => auth()->user()->email,
        ]);



        foreach ($cart_items as $product) {
            $lineItems[] = [
                'price_data' => [
                    'currency'     => 'gbp',
                    'product_data' => [
                        'name' => $product->product->name, // Ensure this is the correct way to get the product name
                    ],
                    'unit_amount'  => round($product->product->price*100), // Ensure price is in GBP and already a decimal
                ],
                'quantity'   => $product->quantity, // Ensure this is the correct way to get the quantity
            ];
        }
        
        // Check that $lineItems is not empty
       
        
        $session = \Stripe\Checkout\Session::create([
            'shipping_address_collection' => ['allowed_countries' => ['GB']],
            'success_url' => route('cartlist'),
            'cancel_url' => route('cartlist'), // You should provide a cancel_url as well
            'payment_method_types' => ['card'], // 'link' is not a standard payment method type for Stripe
            "metadata" => array("cus_id" => $customer->id,"userid" =>auth()->user()->id),
            'line_items' => $lineItems,
            'mode' => 'payment',
        ]);
        
        return redirect($session->url); // Make sure to use the property access '->' instead of array access '[]'

    }

    public function stripeChweckoutSuccess(Request $request)
    {
        $stripe = new \stripe\StripeClient(env('STRIPE_SECRET'));

        $response = $stripe->checkout->session->retrieve($request->session_id);

        return redirect()->route('stripe.index') ->with('success','Payment successful.');

    }
}



