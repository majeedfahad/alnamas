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
        Schema::create('best_images_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('best_image_id')->constrained()->cascadeOnDelete();
            $table->foreignId('liked_by');
            $table->timestamps();

            $table->unique(['best_image_id', 'liked_by']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('best_images_likes');
    }
};
