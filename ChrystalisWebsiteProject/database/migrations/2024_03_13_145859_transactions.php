<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->unsignedBigInteger('order_id');
            $table->text('customer_id');
            // Define the foreign key relationship to orders table
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
