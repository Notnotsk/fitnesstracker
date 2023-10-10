<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type_id');
            $table->date('date');
            $table->string('name')->nullable();
            $table->string('music')->nullable();
            $table->string('venue')->nullable();
            $table->integer('body_weight')->nullable();
            $table->integer('calories_burned')->nullable();
            $table->integer('length')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workouts');
    }
};
