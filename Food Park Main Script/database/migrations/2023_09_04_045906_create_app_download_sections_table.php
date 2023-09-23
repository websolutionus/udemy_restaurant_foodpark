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
        Schema::create('app_download_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('background');
            $table->string('title');
            $table->text('short_description');
            $table->string('play_store_link')->nullable();
            $table->string('apple_store_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_download_sections');
    }
};
