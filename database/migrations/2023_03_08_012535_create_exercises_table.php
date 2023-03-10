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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('equipment')->nullable();
            $table->text('muscle')->nullable();
            $table->text('size')->nullable();
            $table->timestamps();
        });

        Schema::create('exercise_workout', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('exercise_id');
            $table->unsignedInteger('workout_id');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
