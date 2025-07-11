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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('content')->nullable();
            $table->string('thumbnail')->nullable();
            $table->enum('is_featured',['featured','not_featured'])->default('not_featured');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->nullable()->constrained('category')->cascadeOnDelete();
            $table->foreignId('teacher_id')->nullable()->constrained('teacher')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
