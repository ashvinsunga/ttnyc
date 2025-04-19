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
            $table->id('order_id');
            $table->decimal('order_cost', 6, 2);
            $table->string('order_status', 100)->default('on_hold');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('user_phone');
            $table->string('user_city', 255);
            $table->string('user_address', 255);
            $table->dateTime('order_date')->useCurrent();
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
