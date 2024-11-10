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
        //
        Schema::create('jurusan', function (Blueprint $table) {
        $table->id();
        $table->longText('content');
        $table->string('elearningDKV');
        $table->string('elearningMP');
        $table->string('elearningTAB');
        $table->string('elearningTKR');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('jurusan');
    }
};
