<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('created_by');
            $table->string('title');
            $table->string('level')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->string('duration')->nullable();
            $table->boolean('is_custom')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
