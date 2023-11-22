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
        Schema::create('framings', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('frame_id');
            $table->integer('product_id')->nullable();
            $table->string('user_id')->nullable();
            $table->integer('width');
            $table->integer('height');
            $table->integer('mount_board')->nullable();
            $table->string('mount_color')->nullable();
            $table->integer('glass')->nullable();
            $table->string('image')->nullable();
            $table->string('printing_id')->nullable();
            $table->double('price')->nullable();
            $table->string('scale')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('framings');
    }
};
