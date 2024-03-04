<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;
use Illuminate\View\View;

class StripePaymentController extends Controller
{
    //
    public function stripe(): View
    {
        return view('stripe');
    }

    public function stripecheckout(request $request)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $reDirectUrl = route('stripe.checkout.success').'?session_id={CHECKOUT_SESSION_ID}';

        $response = $stripe->checkout->sessions->create([
            'success_url' => $reDirectUrl,
            'payment_method_types' => ['link','card'],

            'line_items' => [
                [
                'price_data' => [
                    'product_data' => [
                        'name' => $request->product,
                    ],
                    'unit_amount' => 100 * $request->price,
                    'currency' => 'GBP',
                ],
                'quantity' => 1
            ],
        ],
        'mode' => 'payment',
        'allow_promotion_codes' => true,

        ]);
        return redirect($response['url']);

    }

    public function stripeChweckoutSuccess(Request $request)
    {
        $stripe = new \stripe\StripeClient(env('STRIPE_SECRET'));

        $response = $stripe->checkout->session->retrieve($request->session_id);

        return redirect()->route('stripe.index') ->with('success','Payment successful.');

    }
}



