<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_orders', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing `id` column
            $table->unsignedBigInteger('order_id')->nullable(); // Adjusted to allow null values
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('quantity');
            $table->decimal('total_price', 8, 2); // For example: 999999.99 maximum value
            // Add your foreign keys and other table properties here
            // $table->foreign('product_id')->references('id')->on('products'); // Uncomment if you have a `products` table
            // $table->foreign('order_id')->references('id')->on('orders'); // Ensure this matches your orders table structure
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_orders');
    }
};
