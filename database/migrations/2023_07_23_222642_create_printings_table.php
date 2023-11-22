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
        Schema::create('printings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('printing_id')->nullable();
            $table->string('frame_id')->nullable();
            $table->string('user_id')->nullable();
            $table->integer('width');
            $table->integer('height');
            $table->double('price')->nullable();
            $table->string('paper');
            $table->string('image')->nullable();
            $table->integer('frame')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printings');
    }
};
