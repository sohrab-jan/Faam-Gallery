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
        Schema::create('frame_assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('side');
            $table->string('picture');
            $table->string('face');
            $table->string('alt');
            $table->double('wide');
            $table->double('deep');
            $table->string('pm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frame_assets');
    }
};
