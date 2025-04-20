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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name', 100);
            $table->string('product_category', 100);
            $table->text('product_description', 255);
            $table->string('product_image', 255);
            $table->string('product_image2', 255);
            $table->string('product_image3', 255);
            $table->string('product_image4', 255);
            $table->decimal('product_price', 6, 2);
            $table->unsignedTinyInteger('product_special_offer');
            $table->string('product_color', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
