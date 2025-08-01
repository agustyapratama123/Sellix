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
            $table->id();
            $table->string('name');
            $table->string('barcode')->nullable();
            $table->foreignId('category_id')->constrained('product_categories')->cascadeOnDelete();
            $table->decimal('purchase_price', 15, 2);
            $table->decimal('sale_price', 15, 2);
            $table->integer('minimum_stock');
            $table->string('image_path')->nullable(); // untuk menyimpan gambar
            $table->timestamps();
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
