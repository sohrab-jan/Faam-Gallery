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
        Schema::create('artwalls', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->text('exhibition_name');
            $table->text('artist');
            $table->text('title');
            $table->string('image_artist');
            $table->string('image_exhibition');
            $table->text('exhibition_short_des');
            $table->text('exhibition_long_des');
            //            $table->text('biography');
            //            $table->string('biography_image');
            //            $table->text('biography_description');
            //            $table->text('biography_long_des');
            $table->text('upcoming_title');
            $table->text('date');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artwalls');
    }
};
