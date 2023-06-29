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
        Schema::create('best_images_interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('best_image_id')->constrained()->cascadeOnDelete();
            $table->foreignId('interacted_by');
            $table->string('type')->default('like');
            $table->timestamps();

            $table->unique(['best_image_id', 'interacted_by']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('best_images_interactions');
    }
};
