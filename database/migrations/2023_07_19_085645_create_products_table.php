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
            $table->string('size');
            $table->unsignedInteger('width');
            $table->unsignedInteger('height');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->text('product_short_des')->nullable();
            $table->text('product_long_des')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->foreignId('artist_id');
            $table->foreignId('category_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
