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
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->bigInteger('price');
            $table->bigInteger('selling_price')->nullable();
            $table->string('sku')->nullable();
            $table->integer('qty')->nullable()->default(0);
            $table->integer('alert_qty')->nullable();
            $table->mediumText('short_detail')->nullable();
            $table->longText('long_detail')->nullable();
            $table->string('featured_image')->nullable();
            $table->json('gallery_images')->nullable();     
            $table->string('video_link')->nullable();
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
