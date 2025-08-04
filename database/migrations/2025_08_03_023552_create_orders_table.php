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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //The total column stores the final total price amount the customer has to pay for that entire order.
            //It is usually the sum of (product price × quantity) for all products in that order.
            //It can also include taxes, discounts, or shipping fees if your system accounts for those.
            $table->decimal('total', 10, 2);
            $table->string('status')->default('pending'); // pending, confirmed, shipped, etc.
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
