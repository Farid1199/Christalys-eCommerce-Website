<?php

namespace App\Jobs\StripeWebhooks;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\WebhookClient\Models\WebhookCall;
use App\Models\Order;
use App\Models\ItemOrder;
use App\Models\Transaction;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Events\PlaOrderEvent;

class HandleChargeableSource implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /** @var \Spatie\WebhookClient\Models\WebhookCall */
    public $webhookCall;

    public function __construct(WebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
    }

    public function handle()
    {
        // Extract the necessary data from the payload
        $payload = $this->webhookCall->payload['data']['object'];

        // Here we assume that product_id and address_id are available and valid.
        // You will need to adjust this to suit your actual data.
        $product_id = 1; // This should be determined by your application logic
        $address_id = 1; // This should be determined by your application logic

        // Extracted data
        $data = [
            'id' => $payload['id'],
            'amount_subtotal' => $payload['amount_subtotal'] / 100, // Stripe amounts are in cents
            'amount_total' => $payload['amount_total'] / 100,
            'created' => $payload['created'],
            'customer_details' => $payload['customer_details'],
            'payment_method_types' => implode(',', $payload['payment_method_types']), // Convert array to string
            'payment_status' => $payload['payment_status'],
            'shipping_details' => $payload['shipping_details'],
            'status' => $payload['status'],
            'success_url' => $payload['success_url'],
            'cancel_url' => $payload['cancel_url'],
            'metadata' => $payload['metadata'],
        ];

        // Ensure product_id is present in metadata
        if(!isset($data['metadata']['product_id'])) {
            $data['metadata']['product_id'] = [$product_id]; // Default to predefined product_id if not present
        }

        // Start a database transaction to ensure data integrity
        DB::beginTransaction();
        try {
            // Create the Order
            $order = new Order();
            $order->user_id = $data['metadata']['userid'];
            $order->address_id = $address_id;
            $order->session_id = $data['created'];
            $order->total_price = $data['amount_total'];
            $order->paid = ($data['payment_status'] === 'paid');
            $order->save();

            // Fetch all the items the user added to the cart using CartItem model
            $cartItems = CartItem::where('user_id', $order->user_id)->get();

            foreach ($cartItems as $cartItem) {
                // Create the ItemOrder for each product in cart
                $itemOrder = new ItemOrder();
                $itemOrder->order_id = $order->order_id;
                $itemOrder->product_id = $cartItem->product_id;
                $itemOrder->quantity = $cartItem->quantity;
                // Check if total_price is null or not, and set it accordingly
                $itemOrder->total_price = $cartItem->total_price ? $cartItem->total_price : 0; // Ensure total_price is not null
                $itemOrder->save();
            }

            // Create the Transaction
            $transaction = new Transaction();
            $transaction->order_id = $order->order_id;
            $transaction->customer_id = $data['metadata']['cus_id'];
            $transaction->save();



            event(new PlaOrderEvent("new order creted"));
            // Commit the transaction
            DB::commit();
        } catch (\Exception $e) {
            // An error occurred; rollback the transaction
            DB::rollback();
            // Log the error
            Log::error('Error processing Stripe webhook: ' . $e->getMessage());
            // Re-throw the exception if necessary
            throw $e;
        }
    }
}
