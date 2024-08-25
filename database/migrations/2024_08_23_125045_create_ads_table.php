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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->string('image1')->nullable();
            $table->string('url1')->nullable();
            $table->string('title2')->nullable();
            $table->string('image2')->nullable();
            $table->string('url2')->nullable();
            $table->string('title3')->nullable();
            $table->string('image3')->nullable();
            $table->string('url3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
